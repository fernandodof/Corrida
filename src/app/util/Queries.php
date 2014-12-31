<?php

/**
 * Description of Queries
 *
 * @author Fernando
 */
class Queries {

    const LOGIN_WITH_EMAIl = 'SELECT r FROM runner r WHERE r.email = :email AND r.password = :password';
    
    const LOGIN_WITH_LOGIN = 'SELECT r FROM runner r WHERE r.login = :login AND r.password = :password';

    const CHECK_LOGIN_EXISTS = 'SELECT count(r.login) as count FROM runner r WHERE r.login LIKE :login';
    
    const CHECK_EMAIL_EXISTS = 'SELECT count(r.email) as count FROM runner r WHERE r.email LIKE :email';
}
