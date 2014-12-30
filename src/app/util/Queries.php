<?php

/**
 * Description of Queries
 *
 * @author Fernando
 */
class Queries {

    const LOGIN_WITH_EMAIl = 'SELECT r
                             FROM runner r WHERE r.email = :email AND r.password = :password';
    
    const LOGIN_WITH_LOGIN = 'SELECT r 
            `                 FROM runner r WHERE r.login = :login AND r.senha = :password';

}
