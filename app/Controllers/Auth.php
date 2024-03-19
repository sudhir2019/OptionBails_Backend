<?php

namespace App\Controllers;
use App\Models\AuthModel;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use Illuminate\Support\Facades\DB;

class Auth extends BaseController {
    public function index(): string {
        return view( 'login' );
    }

    public function login(): string {
        return view( 'login' );
    }

    public function dashboard() {
        // $session = \Config\Services::session();
        $session = session();
        $sessionData = $session->get();
        // echo $sessionData[ 'UserId' ];
        if ( isset( $sessionData[ 'isLoggedIn' ] ) && $sessionData[ 'isLoggedIn' ] == 1 ) {
            $userId = $sessionData[ 'userId' ];
            // $matchId = $sessionData[ 'matchId' ];

            $db = \Config\Database::connect();
            // Get database connection

            // Wallet
            $builder = $db->table( 'user_account' );
            $builder->select( '*' );
            $builder->join( 'wallet_master', 'user_account.user_id = wallet_master.user_id', 'left' );
            $builder->where( 'user_account.user_id', $userId );
            $query = $builder->get();

            $data[ 'user' ] = $query->getRow();

            // match_master & game_indices
            $match_master = $db->table('match_master');
            $match_master->select('*');
           $match_master->join('game_indices', 'match_master.match_id = game_indices.match_id', 'left');
            $match_master->where('match_master.status', '1'); // Filter by status for live matches
            $data['matches'] = $match_master->get()->getResult();

            // print_r($data);
            return view( 'dashboard', $data );
            // Pass $userId to the view
        } else {
            return view( 'login' );
        }

    }

    public function loginprocess() {

        helper( [ 'form' ] );
        $session = session();
        $rules = [
            'email'         => 'required|min_length[4]|max_length[100]|valid_email',
            'password'      => 'required|min_length[1]|max_length[50]',

        ];

        if ( $this->validate( $rules ) ) {
            $authmodel = new AuthModel();

            // print_r( $authmodel );
            $data = [
                'email'    => $this->request->getVar( 'email' ),
                'password' => $this->request->getVar( 'password' )
            ];

            // print_r( $data );

            $result = $authmodel->where( 'email', $data[ 'email' ] )
            ->where( 'password', md5( $data[ 'password' ] ) )
            ->countAllResults();

            if ( $result == 1 ) {

                $db = \Config\Database::connect();
                // Get database connection

                $builder = $db->table( 'user_account' );
                
                $builder->select( '*' );
                $builder->join( 'wallet_master', 'user_account.user_id = wallet_master.user_id', 'left' );
                $builder->where( 'user_account.email', $data[ 'email' ] );
                $query = $builder->get();

                $arr = $query->getRow();
                //
                // print_r( $arr->user_id );

                $ses_data = [
                    'userId' => $arr->user_id,
                    'email' =>  $arr->email,
                    'balance' =>$arr->balance,
                    'isLoggedIn' => TRUE
                ];
                $session->set( $ses_data );

                return redirect()->to( '/dashboard' );

            } else {
                $session->setFlashData( 'msg', [ 'error'=> 'Error In Login!!' ] );
                return view( 'login' );

            }
        } else {
            $data[ 'validation' ] = $this->validator;
            $session->setFlashData( 'msg', [ 'error'=> 'Error In Login!!' ] );
            return view( 'login' );

        }
    }

    public function logout() {
        $session = session();
        $session->destroy();
        // Destroy the session
        return redirect()->to( '/login' );
    }
}
