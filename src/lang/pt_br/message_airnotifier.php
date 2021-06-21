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
 * Strings for component 'message_airnotifier', language 'pt_br', version '3.11'.
 *
 * @package     message_airnotifier
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['airnotifier:managedevice'] = 'Gerenciar dispositivos';
$string['airnotifieraccesskey'] = 'Chave de acesso do Airnotifier';
$string['airnotifierappname'] = 'Nome do aplicativo Airnotifier';
$string['airnotifiermobileappname'] = 'Nome do app móvel';
$string['airnotifierport'] = 'Porta do Airnotifier';
$string['airnotifierurl'] = 'URL do Airnotifier';
$string['configairnotifieraccesskey'] = 'A chave de acesso usada para se conectar ao servidor Airnotifier.';
$string['configairnotifierappname'] = 'O nome do identificador do aplicativo em Airnotifier.';
$string['configairnotifiermobileappname'] = 'O identificador único do app móvel (geralmente algo como com.moodle.moodlemobile).';
$string['configairnotifierport'] = 'A porta usada para se conectar ao servidor Airnotifier.';
$string['configairnotifierurl'] = 'A URL do servidor para conectar para enviar "push notifications".';
$string['deletecheckdevicename'] = 'Excluir o seu dispositivo: {$a->name}';
$string['deletedevice'] = 'Excluir o dispositivo. Repare que um app poderá registrar o dispositivo novamente. Caso o dispositivo continuar reaparecendo, desative-o.';
$string['devicetoken'] = 'Token do dispositivo';
$string['enableprocessor'] = 'Habilitar notificações móveis';
$string['errorretrievingkey'] = 'Ocorreu um erro ao recuperar a chave de acesso. Seu site deve estar registrado para utilizar este serviço. Se o seu site está registrado, tente atualizar seu registro.';
$string['keyretrievedsuccessfully'] = 'A chave de acesso foi obtida com sucesso. Para acessar as estatísticas de uso do Moodle App, por favor, crie uma conta no <a href="https://apps.moodle.com">Moodle Apps Portal</a>.';
$string['moodleappsportallimitswarning'] = 'Por favor, note que o número de dispositivos permitidos a receber notificações depende do seu plano de assinatura do Moodle app. Para detalhes, visite o <a href="{$a}" target="_blank">Moodle Apps Portal</a>.';
$string['nodevices'] = 'Nenhum dispositivo registrado. Os dispositivos aparecerão automaticamente depois que você instalar o aplicativo Moodle Mobile e adicionar este site.';
$string['nopermissiontomanagedevices'] = 'Você não tem permissão para gerenciar dispositivos.';
$string['notconfigured'] = 'O servidor Airnotifier não foi configurado então as "notificações push" não podem ser enviadas.';
$string['pluginname'] = 'Móvel';
$string['privacy:appiddescription'] = 'Este é um identificador para o aplicativo que está sendo usado.';
$string['privacy:enableddescription'] = 'Se este dispositivo estiver habilitado para o airnotifier.';
$string['privacy:metadata:date'] = 'Data em que a mensagem foi enviada.';
$string['privacy:metadata:enabled'] = 'Se o dispositivo de airnotifier está ativado.';
$string['privacy:metadata:externalpurpose'] = 'Esta informação é enviada para um site externo para ser finalmente entregue ao dispositivo móvel do usuário.';
$string['privacy:metadata:fullmessage'] = 'Mensagem completa.';
$string['privacy:metadata:notification'] = 'Se esta mensagem for uma notificação.';
$string['privacy:metadata:smallmessage'] = 'Uma seção da mensagem.';
$string['privacy:metadata:subject'] = 'A linha de assunto da mensagem.';
$string['privacy:metadata:tableexplanation'] = 'As informações do dispositivo Airnotifier são armazenadas aqui.';
$string['privacy:metadata:userdeviceid'] = 'ID vinculado ao dispositivo móvel do usuário';
$string['privacy:metadata:userfromfullname'] = 'Nome completo do usuário que enviou a mensagem.';
$string['privacy:metadata:userfromid'] = 'ID do usuário do autor da mensagem.';
$string['privacy:metadata:userid'] = 'ID do usuário que enviou a mensagem.';
$string['privacy:metadata:username'] = '\'Username\' do usuário';
$string['privacy:metadata:usersubsystem'] = 'Este plugin está conectado ao subsistema do usuário.';
$string['privacy:subcontext'] = 'Mensagem do Airnotifier';
$string['requestaccesskey'] = 'Requisitar chave de acesso';
$string['showhide'] = 'Habilitar/desabilitar o dispositivo.';
$string['sitemustberegistered'] = 'Para utilizar a instância pública Airnotifier você deve registrar seu site com o Moodle.net';
$string['unknowndevice'] = 'Dispositivo desconhecido';
