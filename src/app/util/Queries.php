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
    
    const GET_RUNS_BY_RUNNER_ID  = "SELECT r.date, r.distance, r.duration, r.avgSpeed, r.pace, r.notes, r.id FROM run r WHERE r.runner = :id ORDER BY r.date DESC";
   
    const GET_RUN_COUNT = 'SELECT count(r) FROM run r WHERE r.runner = :id';
    
    //Native Queries
    const GET_RUNS_BY_RUNNER_ID_NATIVE  = 'SELECT r.date, r.distance, r.duration, r.avgSpeed, r.pace, r.notes, r.id FROM run r WHERE r.runner_id = :id';
    
}
