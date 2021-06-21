<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'adaptivequiz', language 'pt_br', version '3.11'.
 *
 * @package     adaptivequiz
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityreports'] = 'Relatório de tentativas';
$string['adaptivequiz:addinstance'] = 'Adicionar um novo questionário adaptativo';
$string['adaptivequiz:attempt'] = 'Questionário com tentativa adaptativa';
$string['adaptivequiz:reviewattempts'] = 'Reveja submissões do questionário adaptativo';
$string['adaptivequiz:viewreport'] = 'Ver relatórios do questionário adaptativo';
$string['adaptivequizname'] = 'Nome';
$string['adaptivequizname_help'] = 'Digite o nome da instância do Questionário Adaptativo';
$string['all_attempts_deleted'] = 'Todas as tentativas do questionário adaptativo foram excluídas';
$string['all_grades_removed'] = 'Todas as notas do questionário adaptativo foram removidas';
$string['answer'] = 'Responder';
$string['answerdistgraph_numrightwrong'] = 'Num errado (-) / Num certo (+)';
$string['answerdistgraph_questiondifficulty'] = 'Nível da questão';
$string['answerdistgraph_title'] = 'Distribuição de respostas por {$a->firstname} {$a->lastname}';
$string['answers_display_name'] = 'Respostas';
$string['attempt_questiondetails'] = 'Detalhes da questão';
$string['attempt_state'] = 'Estado da tentativa';
$string['attempt_summary'] = 'Resumo da tentativa';
$string['attempt_user'] = 'Usuário';
$string['attemptclosed'] = 'A tentativa foi fechada manualmente.';
$string['attemptclosedstatus'] = 'Fechada manualmente por {$a->current_user_name} (user-id: {$a->current_user_id}) em {$a->now}.';
$string['attemptdeleted'] = 'Tentativa excluída por {$a->name} submetida em {$a->timecompleted}';
$string['attemptfeedback'] = 'Feedback da tentativa';
$string['attemptfeedback_help'] = 'O feedback da tentativa é exibido ao usuário quando a tentativa for concluída';
$string['attemptfinishedtimestamp'] = 'Hora de término da tentativa';
$string['attemptfirst'] = 'Primeira tentativa';
$string['attemptlast'] = 'Última tentativa';
$string['attemptquestion_ability'] = 'Medida de habilidade';
$string['attemptquestion_abilitylogits'] = 'Habilidade medida (logística)';
$string['attemptquestion_difficulty'] = 'Dificuldade da questão (logística)';
$string['attemptquestion_diffsum'] = 'Somatório da dificuldade';
$string['attemptquestion_error'] = 'Erro Padrão (&plusmn;&nbsp;x%)';
$string['attemptquestion_level'] = 'Nível da questão';
$string['attemptquestion_num'] = '#';
$string['attemptquestion_rightwrong'] = 'Certo/Errado';
$string['attemptquestion_stderr'] = 'Erro padrão (&plusmn;&nbsp;logits)';
$string['attemptsallowed'] = 'Tentativas permitidas';
$string['attemptsallowed_help'] = 'O número de vezes que um estudante pode responder esta atividade';
$string['attemptstarttime'] = 'Hora de início da tentativa';
$string['attemptstate'] = 'Estado da tentativa';
$string['attemptstopcriteria'] = 'Motivo para parar tentativa';
$string['attempttotaltime'] = 'Tempo total (hh:mm:ss)';
$string['back_to_all_questions'] = '&laquo; Voltar a todas as questões';
$string['backtomainreport'] = 'Voltar para relatórios principais';
$string['backtoviewattemptreport'] = 'Voltar para visualizar o relatório de tentativa';
$string['backtoviewreport'] = 'Voltar para relatórios principais';
$string['bestscore'] = 'Melhor Pontuação';
$string['bestscorestderror'] = 'Erro Padrão';
$string['browsersecurity'] = 'Segurança do navegador';
$string['calcerrorwithinlimits'] = 'O calculo de erro padrão de ($a->calerror) está dentro dos limites impostos pela atividade ($a->definederror)';
$string['closeattempt'] = 'Fechar tentativa';
$string['completeattempterror'] = 'Erro ao tentar finalizar a gravação da tentativa';
$string['confirmcloseattempt'] = 'Tem certeza que você deseja fechar e finalizar essa tentativa de {$a->name}?';
$string['confirmcloseattemptscore'] = '{$a->num_questions} perguntas foram respondidas e a pontuação até agora é {$a->measure} {$a->standarderror}.';
$string['confirmcloseattemptstats'] = 'Esta tentativa foi iniciado em {$a->started} e última atualização em {$a->modified}.';
$string['confirmdeleteattempt'] = 'Confirmando a exclusão da tentativa de ($a->name) submetida em ($a->timecompleted)';
$string['deleteattemp'] = 'Excluir Tentativa';
$string['discrimination_display_name'] = 'Discriminação';
$string['downloadcsv'] = 'Baixar CSV';
$string['enterrequiredpassword'] = 'Digite a senha necessária';
$string['errorattemptstate'] = 'Ocorreu um erro ao determinar o estado da tentativa';
$string['errorclosingattempt'] = 'Registro da tentativa não foi encontrado';
$string['errorclosingattempt_alreadycomplete'] = 'Esta tentativa foi concluída, ela não pode ser fechada manualmente.';
$string['errordeletingattempt'] = 'Registro da tentativa não foi encontrado';
$string['errorfetchingquest'] = 'Incapaz de obter questões para o nível {$a->level}';
$string['errorlastattpquest'] = 'Erro ao verificar o valor da resposta para a última tentativa da questão';
$string['errorsumrightwrong'] = 'O somatório das respostas corretas e incorretas não é igual ao número total de tentativas das questões';
$string['formelementdecimal'] = 'Insira um número decimal. Comprimento máximo de 10 dígitos e máximo de 5 dígitos à direita do ponto decimal';
$string['formelementempty'] = 'Introduza um número inteiro positivo de 1 a 999';
$string['formelementnegative'] = 'Introduza um número inteiro positivo de 1 a 999';
$string['formelementnumeric'] = 'Introduza um número inteiro positivo de 1 a 999';
$string['formlowlevelgreaterthan'] = 'O nível mais baixo deve ser menor do que o nível mais alto';
$string['formminquestgreaterthan'] = 'Número mínimo de perguntas deve ser menor do que o número máximo de perguntas';
$string['formquestionpool'] = 'Selecione pelo menos uma categoria questão';
$string['formstartleveloutofbounds'] = 'O nível inicial deve ser um número que está entre o mais baixo e o mais alto nível';
$string['formstderror'] = 'Deve inserir uma porcentagem menor do que 50 e maior ou igual a 0';
$string['functiondisabledbysecuremode'] = 'Essa funcionalidade está atualmente desativada';
$string['gradehighest'] = 'Nota mais alta';
$string['grademethod'] = 'Método de Avaliação';
$string['grademethod_help'] = 'Quando várias tentativas são permitidas, os seguintes métodos estão disponíveis para o cálculo da nota final questionário:

* Nota mais alta de todas as tentativas
* Primeira tentativa (todas as outras tentativas são ignoradas)
* Última tentativa (todas as outras tentativas são ignoradas)';
$string['graphlegend_error'] = 'Erro padrão';
$string['graphlegend_target'] = 'Nível alvo';
$string['highestlevel'] = 'O mais alto nível de dificuldade';
$string['id'] = 'ID';
$string['lowestlevel'] = 'Menor nível de dificuldade';
$string['maximumquestions'] = 'Número máximo de questões';
$string['maximumquestions_help'] = 'O número máximo de questões que o estudante pode tentar';
$string['maxquestattempted'] = 'Número máximo de questões tentadas';
$string['minimumquestions'] = 'Número mínimo de questões';
$string['minimumquestions_help'] = 'O número mínimo de questões que o estudante precisa tentar';
$string['modulename'] = 'Questionário adaptativo';
$string['modulenameplural'] = 'Questionário adaptativo';
$string['na'] = 'não aplicável';
$string['name'] = 'Nome';
$string['noattemptsallowed'] = 'Não são permitidas mais tentativas para esta atividade';
$string['nonewmodules'] = 'Nenhuma instância de questionário adaptativo encontrado';
$string['nopermission'] = 'Você não possui permissão para visualizar este recurso';
$string['notinprogress'] = 'Esta tentativa não está em progresso';
$string['notyourattempt'] = 'Esta não é a sua tentativa para esta atividade';
$string['numofattemptshdr'] = 'Número de tentativas';
$string['numright'] = 'Num correto';
$string['numwrong'] = 'Num errado';
$string['percent_correct_display_name'] = '% Correta';
$string['pluginadministration'] = 'Questionário adaptativo';
$string['pluginname'] = 'Questionário adaptativo';
$string['question_report'] = 'Análise de Questão';
$string['questionanalysisbtn'] = 'Análise de Questão';
$string['questionnumber'] = 'Questão #';
$string['questionpool'] = 'Banco de questões';
$string['questions_report'] = 'Relatório de Questões';
$string['questionsattempted'] = 'Somatório das tentativas das questões';
$string['recentactquestionsattempted'] = 'Tentativas das questões: {$a}';
$string['recentattemptstate'] = 'Estado da tentativa:';
$string['recentcomplete'] = 'Concluído';
$string['recentinprogress'] = 'Em progresso';
$string['requirepassword'] = 'Senha obrigatória';
$string['requirepassword_help'] = 'Estudantes devem digitar a senha antes de iniciar a sua tentativa';
$string['requirepasswordmessage'] = 'Para começar este questionário você precisa saber a senha do questionário';
$string['resetadaptivequizsall'] = 'Excluir todas as tentativas do questionário adaptativo';
$string['result'] = 'Resultado';
$string['reviewattempt'] = 'Revisar tentativa';
$string['reviewattemptreport'] = 'Revisando a tentativa de ($a->fullname) submetida em ($a->finished)';
$string['score'] = 'Pontuação';
$string['scoring_table'] = 'Tabela de pontuação';
$string['standarderror'] = 'Erro padrão para parar';
$string['standarderrorhdr'] = 'Erro padrão';
$string['startattemptbtn'] = 'Iniciar tentativa';
$string['startinglevel'] = 'Nível inicial de dificuldade';
$string['startinglevel_help'] = 'O estudante inicia uma tentativa, a atividade selecionará aleatoriamente uma questão correspondente ao nível de dificuldade';
$string['statistic'] = 'Estatística';
$string['stopingconditionshdr'] = 'Condições de parada';
$string['submitanswer'] = 'Enviar resposta';
$string['times_used_display_name'] = 'Tempo usado';
$string['unknownuser'] = 'Usuário desconhecido';
$string['updateattempterror'] = 'Erro ao tentar atualizar o registro da tentativa';
$string['user'] = 'Usuário';
$string['value'] = 'Valor';
$string['viewreportbtn'] = 'Ver o relatório';
$string['wrongpassword'] = 'A senha está incorreta';
