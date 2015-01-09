<?php

/**
 * Description of Queries
 *
 * @author Fernando
 */
class Queries {

    const CHECK_LOGIN_EXISTS = 'SELECT count(r.login) as count FROM runner r WHERE r.login LIKE :login';
    
    const CHECK_EMAIL_EXISTS = 'SELECT count(r.email) as count FROM runner r WHERE r.email LIKE :email';
    
    const GET_RUNS_BY_RUNNER_ID  = "SELECT r.date, r.distance, r.duration, r.avgSpeed, r.pace, r.notes, r.id FROM run r WHERE r.runner = :id ORDER BY r.date DESC";
   
    const GET_RUN_COUNT = 'SELECT count(r) FROM run r WHERE r.runner = :id';

    const REMOVE_RUN_BY_ID = 'DELETE FROM run r WHERE r.id = :id';
    
    const GET_RUNS_BY_DATE = 'SELECT r FROM run r WHERE r.date = :date AND r.runner = :runner_id ORDER BY r.id';

    const GET_RUN_BY_RUNNER_ID_RUN_ID = 'SELECT r FROM run r WHERE r.id = :runid AND r.runner = :runnerid';
    //Native Queries
    const GET_RUNS_BY_RUNNER_ID_NATIVE  = 'SELECT r.date, r.distance, r.duration, r.avgSpeed, r.pace, r.notes, r.id FROM run r WHERE r.runner_id = :id';
    
//    const CHECK_LOGIN_EXISTS = 'SELECT count(r.login) as count FROM runner r WHERE r.login LIKE :login';
//    
//    const CHECK_EMAIL_EXISTS = 'SELECT count(r.email) as count FROM runner r WHERE r.email LIKE :email';
    
    const GET_CURRENT_PASS = 'SELECT r.password as pass FROM runner r WHERE r.id = :id';

    const LOGIN_WITH_EMAIl = 'SELECT r.id, r.email, r.login, r.name FROM runner r WHERE r.email = :email AND BINARY r.password = :password';
    
    const LOGIN_WITH_LOGIN = 'SELECT r.id, r.email, r.login, r.name FROM runner r WHERE r.login = :login AND BINARY r.password = :password';
    
}
