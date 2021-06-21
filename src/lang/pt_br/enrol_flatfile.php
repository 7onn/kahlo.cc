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
 * Strings for component 'enrol_flatfile', language 'pt_br', version '3.11'.
 *
 * @package     enrol_flatfile
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['encoding'] = 'Codificação de arquivo';
$string['expiredaction'] = 'Ação ao término da inscrição';
$string['expiredaction_help'] = 'Selecione a ação a ser realizada quando a inscrição do usuário terminar. Por favor, observe que alguns dados e configurações do usuário são removidos do curso durante a desinscrição no curso.';
$string['filelockedmail'] = 'O arquivo de texto que você está utilizando para fazer as inscrições ({$a}) não pôde ser cancelado pelo processo cron. Isto normalmente significa que a configuração das permissões do arquivo não é compatível. Por favor corrija as permissões para que o sistema possa cancelar o arquivo e impedir que o mesmo seja processado diversas vezes.';
$string['filelockedmailsubject'] = 'Erro importante: Arquivo de inscrição';
$string['flatfile:manage'] = 'Gerenciar inscrição de usuário manualmente';
$string['flatfile:unenrol'] = 'Desinscrever usuários do curso manualmente';
$string['flatfileenrolments'] = 'Inscrições com arquivo plano (CSV)';
$string['flatfilesync'] = 'Inscrição sincronizada de arquivos';
$string['location'] = 'Localização do arquivo';
$string['location_desc'] = 'Especifique o caminho completo para o arquivo de registro. O arquivo é automaticamente excluído após o processamento.';
$string['mapping'] = 'Mapeamento de arquivo plano';
$string['messageprovider:flatfile_enrolment'] = 'Mensagem de inscrição por arquivo plano';
$string['notifyadmin'] = 'Notificar administrador';
$string['notifyenrolled'] = 'Notificar os usuários inscritos';
$string['notifyenroller'] = 'Notificar o usuário responsável por matrículas';
$string['pluginname'] = 'Arquivo plano (CSV)';
$string['pluginname_desc'] = 'Este método irá verificar repetidamente e processar um arquivo de texto especialmente formatado no local que você especificar. O arquivo é do tipo separado por vírgula e deverá ter quatro ou seis campos por linha:

operação, nome breve do papel, idnumber do usuário, idnumber do curso  [, horário de inicio, horário de encerramento]

onde:

* operação  = add | del
* papel = estudante | professor | professor-editor
* número de identificação (usuário) = idnumber na tabela de usuário NB não Id
 * número de identificação (curso) = idnumber na tabela de cursos NB não Id
* horário de inicio =  hora de início (em segundos desde a época)
* horário de encerramento =  tempo final (em segundos desde a epoca) - opcional

Poderia ser algo assim:

<pre class="informationbox">
add, student, 5, CF101
add, teacher, 6, CF101
add. editing-teacher, 7, CF101
del, student, 8, CF101
del, student, 17, CF101
add, student, 21, CF101, 1091115000, 1091215000
</pre>';
$string['privacy:metadata:enrol_flatfile:timeend'] = 'Horário em que a inscrição termina';
$string['privacy:metadata:enrol_flatfile:timemodified'] = 'Horário em que a inscrição é modificada';
$string['privacy:metadata:enrol_flatfile:timestart'] = 'Horário em que a inscrição inicia';
