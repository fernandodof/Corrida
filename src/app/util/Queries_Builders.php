<?php

/**
 * Description of Queries_Builders
 *
 * @author Fernando
 */
class Queries_Builders {
    public static function get_runs_by_runner_id_builder(){
        $qb['select'] = 'r.fullDate, r.distance, r.fullTime, r.avgSpeed, r.pace, r.notes, r.id';
        
        $from['run'] = 'r';
        $qb['from'] = $from;
        
        $qb['where'] = 'r.runner = :id';
        
        return $qb;
    }
}
