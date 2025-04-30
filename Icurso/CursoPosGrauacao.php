<?php 
class CursoPosGraduacao implements ICurso
{ 
  
 public string $nomeDisciplina;
public string $nomeProfessor;

public function disciplina(string $nomeDisciplina)
 {
$this->nomedisciplina = $nomeDisciplina;
retrun "Nome da disciplina: {$this->nomeDisciplina}<br>";
}
public fuction professor(string $nomeProfessor)
{
 $this->nomeProfessor = $nomeProfessor;
 retrun "Nome da disciplina: {$this->nomeProfessor}<br>";
 }   
}
