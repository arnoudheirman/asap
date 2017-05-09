<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App;

/**
 * Description of AssessmentFilters
 *
 * @author Admin
 */
class AssessmentFilters extends QueryFilter {
    //put your code here
    public function level($level){
        return $this->builder->where('level_id', $level);
    }
    public function connotation($connotation){
        return $this->builder->where('connotation_id', $connotation);
    }
    /*public function competence($competence){
        return $this->builder->join('assessment_competence', 'assessments.id', '=', 'assessment_competence.assessment_id')
            ->where('assessment_competence.competence_id', $competence);
    }*/
public function competence($competence){
    return $this->builder->where('competence_id', $competence);
}
}