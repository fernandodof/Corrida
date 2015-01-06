<?php

/**
 * Description of Queries_Builders
 *
 * @author Fernando
 */
class Queries_Builders {
    public static function get_runs_by_runner_id_builder(){
        $qb['select'] = 'r.date, r.distance, r.duration, r.avgSpeed, r.pace, r.notes, r.id';
        
        $from['run'] = 'r';
        $qb['from'] = $from;
        
        $orderby['r.date'] = 'desc';
        $qb['orderby'] = $orderby;
        
        $qb['where'] = 'r.runner = :id';
        
        return $qb;
    }
}
