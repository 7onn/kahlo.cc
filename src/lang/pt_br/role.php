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
 * Strings for component 'role', language 'pt_br', version '3.11'.
 *
 * @package     role
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addinganewrole'] = 'Adicionando um novo papel';
$string['addrole'] = 'Acrescentar um novo papel';
$string['advancedoverride'] = 'Sobreposição avançada de papel';
$string['allow'] = 'Permitir';
$string['allowassign'] = 'Permitir atribuição de papel';
$string['allowed'] = 'Permitido';
$string['allowoverride'] = 'Permitir sobreposição de papel';
$string['allowroletoassign'] = 'Permitir que usuário com o papel {$a->fromrole} atribuir o papel {$a->targetrole}';
$string['allowroletooverride'] = 'Permitir que usuário com o papel {$a->fromrole} sobrepor o papel {$a->targetrole}';
$string['allowroletoswitch'] = 'Permitir que usuários com papel {$a->fromrole} mudem papel para {$a->targetrole}';
$string['allowroletoview'] = 'Permitir que os usuários com o papel {$a->fromrole} visualizem o papel {$a->targetrole}';
$string['allowswitch'] = 'Permitir troca de papéis';
$string['allowview'] = 'Permitir papel para ver';
$string['allsiteusers'] = 'Todos os usuários do site';
$string['analytics:listinsights'] = 'Listar insights';
$string['analytics:listowninsights'] = 'Listar próprios Insights';
$string['analytics:managemodels'] = 'Gerenciar modelos';
$string['archetype'] = 'Arquétipo do papel';
$string['archetype_help'] = 'O papel arquétipo determina as permissões quando o papel retorna ao padrão e também determina qualquer nova permissão para o papel quando o site é atualizado.';
$string['archetypecoursecreator'] = 'ARQUÉTIPO: Criador de curso';
$string['archetypeeditingteacher'] = 'ARQUÉTIPO: Professor (editor)';
$string['archetypefrontpage'] = 'ARQUÉTIPO: Usuário autenticado na página inicial';
$string['archetypeguest'] = 'ARQUÉTIPO: Visitante';
$string['archetypemanager'] = 'ARQUÉTIPO: Gerente';
$string['archetypestudent'] = 'ARQUÉTIPO: Estudante';
$string['archetypeteacher'] = 'ARQUÉTIPO: Professor (não editor)';
$string['archetypeuser'] = 'ARQUÉTIPO: Usuário autenticado';
$string['assignanotherrole'] = 'Atribuir outro papel';
$string['assignedroles'] = 'Papéis atribuídos';
$string['assignerror'] = 'Erro ao atribuir papel {$a->role} ao usuário {$a->user}.';
$string['assignglobalroles'] = 'Atribuir papéis globais';
$string['assignmentcontext'] = 'Contexto da atribuição';
$string['assignmentoptions'] = 'Opções da atribuição';
$string['assignrole'] = 'Atribuir papel';
$string['assignrolenameincontext'] = 'Atribuir papel \'{$a->role}\' em {$a->context}';
$string['assignroles'] = 'Atribuir papéis';
$string['assignroles_help'] = 'Designar um papel a um usuário em um determinado contexto, significa dar as permissões que configuram este papel, neste contexto específico e em todos os contextos inferiores.
Por exemplo, se a um usuário for atribuído o papel de estudante em um curso, ele também terá o papel de estudante em todas as atividades e blocos naquele curso.';
$string['assignroles_link'] = 'admin/roles/assign';
$string['assignrolesin'] = 'Atribuir papéis em {$a}';
$string['assignrolesrelativetothisuser'] = 'Atribuir papéis relativos a este usuário';
$string['backtoallroles'] = 'Voltar para lista de todos os papéis';
$string['backup:anonymise'] = 'Anonimizar dados de usuários no backup';
$string['backup:backupactivity'] = 'Fazer backup de atividades';
$string['backup:backupcourse'] = 'Fazer backup de cursos';
$string['backup:backupsection'] = 'Fazer backup de sessões';
$string['backup:backuptargetimport'] = 'Backup para importar';
$string['backup:configure'] = 'Configurar opções de backup';
$string['backup:downloadfile'] = 'Download de arquivos de áreas de backup';
$string['backup:userinfo'] = 'Backup de dados de usuários';
$string['badges:awardbadge'] = 'Emblema da concessão a um usuário';
$string['badges:configurecriteria'] = 'Configurar/editar critérios de ganhar um emblema';
$string['badges:configuredetails'] = 'Configurar/editar os detalhes do emblema';
$string['badges:configuremessages'] = 'Configurar mensagens do emblema';
$string['badges:createbadge'] = 'Criar/duplicar emblemas';
$string['badges:deletebadge'] = 'Excluir emblemas';
$string['badges:earnbadge'] = 'Ganhar emblema';
$string['badges:manageglobalsettings'] = 'Gerenciar configurações globais de emblemas';
$string['badges:manageownbadges'] = 'Ver e gerenciar seus próprios emblemas obtidos';
$string['badges:revokebadge'] = 'Revogar emblema de um usuário';
$string['badges:viewawarded'] = 'Exibir usuários que ganharam um emblema específico, sem ser capaz de atribuir um emblema';
$string['badges:viewbadges'] = 'Ver emblemas disponíveis sem conquistá-los';
$string['badges:viewotherbadges'] = 'Ver emblemas públicos nos perfis de outros usuários';
$string['block:edit'] = 'Editar uma configuração de bloco';
$string['block:view'] = 'Visualizar blocos';
$string['blog:create'] = 'Criar novos textos no blog';
$string['blog:manageentries'] = 'Editar e gerenciar itens';
$string['blog:manageexternal'] = 'Editar e gerenciar blogs externos';
$string['blog:search'] = 'Pesquisar por entradas no Blog';
$string['blog:view'] = 'Visualizar textos do blog';
$string['blog:viewdrafts'] = 'Visualizar entradas em rascunho no blog';
$string['calendar:manageentries'] = 'Gerenciar qualquer evento no calendário';
$string['calendar:managegroupentries'] = 'Gerenciar eventos de grupo no calendário';
$string['calendar:manageownentries'] = 'Gerenciar eventos pessoais no calendário';
$string['capabilities'] = 'Ações autorizadas';
$string['capability'] = 'Ação autorizada';
$string['category:create'] = 'Criar categorias';
$string['category:delete'] = 'Excluir categorias';
$string['category:manage'] = 'Gerenciar categorias';
$string['category:update'] = 'Atualizar categorias';
$string['category:viewcourselist'] = 'Ver a categoria do curso e os cursos dentro dela';
$string['category:viewhiddencategories'] = 'Ver categorias ocultas';
$string['category:visibility'] = 'Visualizar categorias ocultas';
$string['checkglobalpermissions'] = 'Verificar permissões do sistema';
$string['checkpermissions'] = 'Verificar permissões';
$string['checkpermissionsin'] = 'Verificar permissões em {$a}';
$string['checksystempermissionsfor'] = 'Verificar as permissões do sistema de {$a->fullname}';
$string['checkuserspermissionshere'] = 'Verifique as permissões que {$a->fullname} tem em {$a->contextlevel}';
$string['chooseroletoassign'] = 'Por favor, escolha um papel para atribuir';
$string['cohort:assign'] = 'Adicionar e remover membros de coortes';
$string['cohort:manage'] = 'Criar, excluir e mover coortes';
$string['cohort:view'] = 'Visualizar coortes do site';
$string['comment:delete'] = 'Excluir comentários';
$string['comment:post'] = 'Postar comentários';
$string['comment:view'] = 'Ver comentários';
$string['competency:competencygrade'] = 'Definir classificação de competência';
$string['competency:competencymanage'] = 'Gerenciar estruturas de competências';
$string['competency:competencyview'] = 'Exibir estruturas de competências';
$string['competency:coursecompetencyconfigure'] = 'Configurar ajustes de competência do curso';
$string['competency:coursecompetencygradable'] = 'Receber marcas de competência';
$string['competency:coursecompetencymanage'] = 'Gerenciar competências de curso';
$string['competency:coursecompetencyview'] = 'Visualizar competências do curso';
$string['competency:evidencedelete'] = 'Excluir prova';
$string['competency:plancomment'] = 'Comentário sobre um plano de aprendizagem';
$string['competency:plancommentown'] = 'Comentário sobre o próprio plano de aprendizagem';
$string['competency:planmanage'] = 'Gerenciar planos de aprendizagem';
$string['competency:planmanagedraft'] = 'Gerenciar rascunhos de planos de aprendizagem';
$string['competency:planmanageown'] = 'Gerenciar os próprios planos de aprendizagem';
$string['competency:planmanageowndraft'] = 'Gerenciar os próprios rascunhos de planos de aprendizagem';
$string['competency:planrequestreview'] = 'Solicitar revisão de um plano de aprendizagem';
$string['competency:planrequestreviewown'] = 'Solicitar revisão de seu próprio plano de aprendizagem';
$string['competency:planreview'] = 'Revisar um plano de aprendizagem';
$string['competency:planview'] = 'Visualizar todos os planos de aprendizagem';
$string['competency:planviewdraft'] = 'Visualizar rascunhos de planos de aprendizagem';
$string['competency:planviewown'] = 'Visualizar os próprios planos de aprendizagem';
$string['competency:planviewowndraft'] = 'Visualizar os próprios rascunhos de planos de aprendizagem';
$string['competency:templatemanage'] = 'Gerenciar modelos de plano de aprendizado';
$string['competency:templateview'] = 'Visualizar modelos de plano de aprendizagem';
$string['competency:usercompetencycomment'] = 'Comentário sobre a competência do usuário';
$string['competency:usercompetencycommentown'] = 'Comentário sobre a competência do próprio usuário';
$string['competency:usercompetencyrequestreview'] = 'Solicitar revisão de uma competência de usuário';
$string['competency:usercompetencyrequestreviewown'] = 'Solicitar revisão de competência do próprio usuário';
$string['competency:usercompetencyreview'] = 'Revisar uma competência do usuário';
$string['competency:usercompetencyview'] = 'Visualizar uma competência do usuário';
$string['competency:userevidencemanage'] = 'Gerenciar evidências de aprendizado prévio';
$string['competency:userevidencemanageown'] = 'Gerencie a própria evidência de aprendizado prévio';
$string['competency:userevidenceview'] = 'Ver evidência de aprendizado prévio de um usuário';
$string['confirmaddadmin'] = 'Você realmente quer incluir <strong>{$a}</strong> como um novo administrador do site?';
$string['confirmdeladmin'] = 'Você realmente deseja remover o usuário <strong>{$a}</strong> da lista de administradores do site?';
$string['confirmroleprevent'] = 'Você realmente deseja remover <strong>"{$a->role}"</strong> da lista de papéis permitidos para permissão "{$a->cap}" no contexto "{$a->context}"?';
$string['confirmroleunprohibit'] = 'Você realmente deseja remover <strong>"{$a->role}"</strong> da lista de papéis proibidos para permissão "{$a->cap}" no contexto "{$a->context}"?';
$string['confirmunassign'] = 'Tem certeza que deseja remover este papel deste usuário?';
$string['confirmunassignno'] = 'Cancelar';
$string['confirmunassigntitle'] = 'Confirme a alteração de papel';
$string['confirmunassignyes'] = 'Remover';
$string['contentbank:access'] = 'Acessar o banco de conteúdo';
$string['contentbank:deleteanycontent'] = 'Excluir qualquer conteúdo do banco de conteúdo';
$string['contentbank:deleteowncontent'] = 'Excluir conteúdo do próprio banco de conteúdo';
$string['contentbank:manageanycontent'] = 'Gerenciar qualquer conteúdo do banco de conteúdo';
$string['contentbank:manageowncontent'] = 'Gerenciar conteúdo do próprio banco de conteúdo';
$string['contentbank:useeditor'] = 'Criar ou editar conteúdo usando um editor de conteúdo';
$string['context'] = 'Contexto';
$string['course:activityvisibility'] = 'Ocultar/Mostrar atividades';
$string['course:bulkmessaging'] = 'Enviar mensagem para várias pessoas';
$string['course:changecategory'] = 'Alterar a categoria do curso';
$string['course:changefullname'] = 'Alterar o nome completo do curso';
$string['course:changeidnumber'] = 'Alterar o ID do curso';
$string['course:changelockedcustomfields'] = 'Alterar campos personalizados bloqueados';
$string['course:changeshortname'] = 'Mudar o nome breve do curso';
$string['course:changesummary'] = 'Mudar sumário do curso';
$string['course:configurecustomfields'] = 'Configurar campos personalizados';
$string['course:create'] = 'Criar cursos';
$string['course:creategroupconversations'] = 'Crie conversas em grupo';
$string['course:delete'] = 'Excluir cursos';
$string['course:downloadcoursecontent'] = 'Faze download do conteúdo do curso';
$string['course:enrolconfig'] = 'Configurar instâncias de inscrição nos cursos';
$string['course:enrolreview'] = 'Revisar inscrições nos cursos';
$string['course:ignoreavailabilityrestrictions'] = 'Desconsiderar restrições de disponibilidade';
$string['course:ignorefilesizelimits'] = 'Use os arquivos maiores do que quaisquer restrições de tamanho de arquivo';
$string['course:isincompletionreports'] = 'Ser exibido no relatório de conclusão de atividades';
$string['course:manageactivities'] = 'Gerenciar atividades';
$string['course:managefiles'] = 'Gerenciar arquivos';
$string['course:managegrades'] = 'Gerenciar notas';
$string['course:managegroups'] = 'Gerenciar grupos';
$string['course:managescales'] = 'Gerenciar escalas de avaliação';
$string['course:markcomplete'] = 'Marcar usuários como concluídos ao concluir o curso';
$string['course:movesections'] = 'Mova seções';
$string['course:overridecompletion'] = 'Sobrepor o status de conclusão da atividade';
$string['course:recommendactivity'] = 'Atividades recomendadas no seletor de atividades';
$string['course:renameroles'] = 'Renomear papéis';
$string['course:request'] = 'Solicitar novos cursos';
$string['course:reset'] = 'Reconfigurar o curso';
$string['course:reviewotherusers'] = 'Revisar outros usuários';
$string['course:sectionvisibility'] = 'Definir visibilidade da seção';
$string['course:setcurrentsection'] = 'Definir seção ativa';
$string['course:setforcedlanguage'] = 'Forçar idioma do curso';
$string['course:tag'] = 'Alterar tags do curso';
$string['course:togglecompletion'] = 'Marcar manualmente as atividades como concluídas';
$string['course:update'] = 'Atualizar configuração do curso';
$string['course:useremail'] = 'Habilitar/desabilitar endereço de e-mail';
$string['course:view'] = 'Visualizar cursos sem participação';
$string['course:viewcoursegrades'] = 'Visualizar notas do curso';
$string['course:viewhiddenactivities'] = 'Visualizar atividades ocultas';
$string['course:viewhiddencourses'] = 'Visualizar cursos que estão ocultos';
$string['course:viewhiddensections'] = 'Visualizar seções ocultas';
$string['course:viewhiddenuserfields'] = 'Visualizar campos ocultos do usuário';
$string['course:viewparticipants'] = 'Visualizar participantes';
$string['course:viewscales'] = 'Visualizar escalas de avaliação';
$string['course:viewsuspendedusers'] = 'Visualizar usuários suspensos';
$string['course:visibility'] = 'Ocultar/Mostrar cursos';
$string['createrolebycopying'] = 'Criar novo papel copiando {$a}';
$string['createthisrole'] = 'Criar este papel';
$string['currentcontext'] = 'Contexto atual';
$string['currentrole'] = 'Papel atual';
$string['customroledescription'] = 'Descrição personalizada';
$string['customroledescription_help'] = 'Descrições dos papeis padrão serão localizadas automaticamente caso a descrição personalizada esteja vazia.';
$string['customrolename'] = 'Nome completo personalizado';
$string['customrolename_help'] = 'Os nomes dos papíes padrão são traduzidos automaticamente se o nome personalizado estiver vazio. Você deve fornecer um nome completo para cada um dos papéis personalizados.';
$string['defaultrole'] = 'Papel padrão';
$string['defaultx'] = 'Padrão: {$a}';
$string['defineroles'] = 'Definir papéis';
$string['deletecourseoverrides'] = 'Excluir todas as sobreposições no curso';
$string['deletelocalroles'] = 'Excluir todas as atribuições locais de papéis';
$string['deleterolesure'] = '<p>Tem certeza que quer excluir o papel "{$a->name} ({$a->shortname})"?</p><p>Este papel é designado a {$a->count} usuários.</p>';
$string['deletexrole'] = 'Excluir papel {$a} ';
$string['duplicaterole'] = 'Duplicar papel';
$string['duplicaterolesure'] = '<p>Tem certeza que quer duplicar o papel "{$a->name} ({$a->shortname})"?</p>';
$string['editingrolex'] = 'Editando papel \'{$a}\'';
$string['editrole'] = 'Editar papel';
$string['editxrole'] = 'Editar papel {$a}';
$string['errorbadrolename'] = 'Nome de papel incorreto';
$string['errorbadroleshortname'] = 'Noe curto do papel incorreto';
$string['errorexistsrolename'] = 'Nome do papel já existe';
$string['errorexistsroleshortname'] = 'Nome do papel já existe';
$string['errorroleshortnametoolong'] = 'O nome breve não deve exceder 100 caracteres';
$string['eventcapabilityassigned'] = 'Capacidade atribuída';
$string['eventcapabilityunassigned'] = 'Capacidade removida';
$string['eventroleallowassignupdated'] = 'Permitir atribuição de papel';
$string['eventroleallowoverrideupdated'] = 'Permitir sobreposição de papel';
$string['eventroleallowswitchupdated'] = 'Permitir mudança de papel';
$string['eventroleallowviewupdated'] = 'Permitir ver papéis';
$string['eventroleassigned'] = 'Papel atribuído';
$string['eventrolecapabilitiesupdated'] = 'Permissões do papel atualizadas';
$string['eventroledeleted'] = 'Papel apagado';
$string['eventroleunassigned'] = 'Papel desatribuído';
$string['eventroleupdated'] = 'Papel atualizado';
$string['existingadmins'] = 'Administradores atuais do site';
$string['existingusers'] = '{$a} usuários';
$string['explanation'] = 'Explicação';
$string['export'] = 'Exportar';
$string['extusers'] = 'Usuários existentes';
$string['extusersmatching'] = 'Usuário existente comparando \'{$a}\'';
$string['filter:manage'] = 'Gerenciar configurações locais de filtros';
$string['frontpageuser'] = 'Usuário autenticado na página inicial';
$string['frontpageuserdescription'] = 'Todos os usuários que realizaram acesso na página inicial do curso.';
$string['globalrole'] = 'Papel global do sistema';
$string['globalroleswarning'] = 'Aviso! Qualquer papel que você designar nesta página funcionará para os usuários em todo o sistema, incluindo a página principal e todos os cursos.';
$string['gotoassignroles'] = 'Ir para Associar papéis para este {$a->contextlevel}';
$string['gotoassignsystemroles'] = 'Ir para Associar papéis no sistema';
$string['grade:edit'] = 'Editar avaliações';
$string['grade:export'] = 'Exportar avaliações';
$string['grade:hide'] = 'Esconder/Mostrar avaliações ou itens';
$string['grade:import'] = 'Importar avaliações';
$string['grade:lock'] = 'Trancar avaliações ou itens';
$string['grade:manage'] = 'Gerenciar itens de avaliação';
$string['grade:managegradingforms'] = 'Gerenciar métodos avançados de notas';
$string['grade:manageletters'] = 'Gerenciar letras de avaliação';
$string['grade:manageoutcomes'] = 'Gerenciar metas de avaliação';
$string['grade:managesharedforms'] = 'Gerenciar modelos de formulários avançados para notas';
$string['grade:override'] = 'Sobrepor avaliações';
$string['grade:sharegradingforms'] = 'Compartilhar modelos de formulários avançados para notas';
$string['grade:unlock'] = 'Destrancar avaliações ou itens';
$string['grade:view'] = 'Ver suas avaliações';
$string['grade:viewall'] = 'Ver avaliações de outros usuários';
$string['grade:viewhidden'] = 'Ver avaliações ocultas do usuário';
$string['h5p:deploy'] = 'Implantar conteúdo H5P';
$string['h5p:setdisplayoptions'] = 'Definir opções de exibição H5P';
$string['h5p:updatelibraries'] = 'Gerenciar os tipos de de conteúdos H5P';
$string['highlightedcellsshowdefault'] = 'As permissões em destaque na tabela abaixo são as padrões para o arquétipo de papel selecionado acima.';
$string['highlightedcellsshowinherit'] = 'As células selecionadas na tabela abaixo exibem permissões (caso existam) que serão herdadas. Além das capacidades para as quais as permissões você atualmente deseja alterar, você deve deixar tudo configurado como herdado.';
$string['inactiveformorethan'] = 'inativo por mais de {$a->timeperiod}';
$string['ingroup'] = 'no grupo "{$a->group}"';
$string['inherit'] = 'Herdar';
$string['invalidpresetfile'] = 'Arquivo de definição de papel inválido';
$string['legacy:admin'] = 'FUNÇÃO HERDADA: Administrador';
$string['legacy:coursecreator'] = 'PAPEL LEGADO: Criador de curso';
$string['legacy:editingteacher'] = 'FUNÇÃO HERDADA: Professor (editor)';
$string['legacy:guest'] = 'FUNÇÃO HERDADA: Visitante';
$string['legacy:student'] = 'FUNÇÃO HERDADA: Estudante';
$string['legacy:teacher'] = 'FUNÇÃO HERDADA: Professor (não editor)';
$string['legacy:user'] = 'FUNÇÃO HERDADA: Usuário autenticado';
$string['legacytype'] = 'Tipo de papel legado';
$string['listallroles'] = 'Listar todos os papéis';
$string['localroles'] = 'Papéis atribuídos localmente';
$string['mainadmin'] = 'Administrador principal';
$string['mainadminset'] = 'Definir administrador principal';
$string['manageadmins'] = 'Gerenciar administradores do site';
$string['manager'] = 'Gerente';
$string['managerdescription'] = 'Gerentes podem acessar cursos e modificá-los, mas normalmente não participam deles.';
$string['manageroles'] = 'Gerenciar papéis';
$string['maybeassignedin'] = 'Tipos de contexto onde esse papel pode ser atribuído';
$string['morethan'] = 'Mais do que {$a}';
$string['multipleroles'] = 'Múltiplos papéis';
$string['my:configsyspages'] = 'Configurar "templates" do sistema para páginas "Painel".';
$string['my:manageblocks'] = 'Gerenciar blocos do Painel';
$string['neededroles'] = 'Papéis com permissão';
$string['nocapabilitiesincontext'] = 'Nenhuma ação disponível neste contexto';
$string['noneinthisx'] = 'Nenhum neste {$a}';
$string['noneinthisxmatching'] = 'Não há usuários comparando \'{$a->search}\' neste {$a->contexttype}';
$string['norole'] = 'Sem papel';
$string['noroleassignments'] = 'Este usuário não tem nenhum atribuição de papel em nenhum lugar deste site.';
$string['noroles'] = 'Nenhum papel';
$string['notabletoassignroleshere'] = 'A atribuição de funções neste contexto não foi ativada por um administrador.';
$string['notabletooverrideroleshere'] = 'Você não é capaz de substituir as permissões em todas as funções aqui';
$string['notes:manage'] = 'Gerenciar Anotações';
$string['notes:view'] = 'Ver anotações';
$string['notset'] = 'Não atribuído';
$string['novisibleroles'] = 'Sem papéis';
$string['overrideanotherrole'] = 'Sobreescrever outro papel';
$string['overridecontext'] = 'Sobreescrever contexto';
$string['overridepermissions'] = 'Sobrepor permissões';
$string['overridepermissions_help'] = 'Sobreposições de permissão permitem que capabilities específicas sejam permitidas ou previnidas em um contexto específico.';
$string['overridepermissions_link'] = 'admin/roles/override';
$string['overridepermissionsforrole'] = 'Sobrepor permissões para o papel \'{$a->role}\' em {$a->context}';
$string['overridepermissionsin'] = 'Sobrepor permissões em {$a}';
$string['overrideroles'] = 'Sobrepor papéis';
$string['overriderolesin'] = 'Sobrepor papéis em {$a}';
$string['overrides'] = 'Sobrepõe';
$string['overridesbycontext'] = 'Substituições (pelo contexto)';
$string['payment:viewpayments'] = 'Ver pagamentos';
$string['permission'] = 'Permissão';
$string['permission_help'] = 'Permissões configurações de capbility. Existem 4 opções:

* Não definido
* Permitir - A permissão é dada para a capability
* Previnir - A permissão é removida da capability, mesmo quando permitida em um contexto superior
* Proibir - A permissão é completamente negada e não pode ser sobrescrita em nenhum contexto inferior (mais específico)';
$string['permissions'] = 'Permissões';
$string['permissionsforuser'] = 'Permissões para usuário {$a}';
$string['permissionsincontext'] = 'Permissões em {$a}';
$string['portfolio:export'] = 'Exportar para portfólios';
$string['potentialusers'] = '{$a} potenciais usuários';
$string['potusers'] = 'Usuários potenciais';
$string['potusersmatching'] = 'Usuários potenciais relacionados a \'{$a}\'';
$string['prevent'] = 'Evitar';
$string['privacy:metadata:preference:showadvanced'] = 'Lidar com o botão de modo avançado de alternância.';
$string['privacy:metadata:role_assignments'] = 'Atribuição de papéis';
$string['privacy:metadata:role_assignments:component'] = 'Plugin responsável pela atribuição de papel, vazio quando atribuído manualmente.';
$string['privacy:metadata:role_assignments:itemid'] = 'O ID da instância de inscrição/autenticação responsável por esta atribuição de papel';
$string['privacy:metadata:role_assignments:modifierid'] = 'O ID do usuário que criou ou modificou a atribuição de papel';
$string['privacy:metadata:role_assignments:roleid'] = 'O ID do papel';
$string['privacy:metadata:role_assignments:tableexplanation'] = 'Esta tabela armazena os papéis atribuídos em cada contexto.';
$string['privacy:metadata:role_assignments:timemodified'] = 'A data em que a atribuição de papel foi criada ou modificada.';
$string['privacy:metadata:role_assignments:userid'] = 'O ID do usuário';
$string['privacy:metadata:role_capabilities'] = 'Capacidades dos papéis';
$string['privacy:metadata:role_capabilities:capability'] = 'O nome da capability.';
$string['privacy:metadata:role_capabilities:modifierid'] = 'O ID do usuário que criou ou modificou a capability';
$string['privacy:metadata:role_capabilities:permission'] = 'A permissão para uma capability: herdar, permitir, impedir ou proibir.';
$string['privacy:metadata:role_capabilities:roleid'] = 'O ID do papel';
$string['privacy:metadata:role_cohortroles'] = 'Papéis para coorte';
$string['prohibit'] = 'Proibir';
$string['prohibitedroles'] = 'Proibido';
$string['question:add'] = 'Adicionar novas questões';
$string['question:config'] = 'Configurar tipos de questão';
$string['question:editall'] = 'Editar todas as questões';
$string['question:editmine'] = 'Editar suas próprias questões';
$string['question:flag'] = 'Sinalizar questões durante a tentativa';
$string['question:managecategory'] = 'Editar categorias de questão';
$string['question:moveall'] = 'Mover todas as questões';
$string['question:movemine'] = 'Mover suas próprias questões';
$string['question:tagall'] = 'Marcar todas as questões';
$string['question:tagmine'] = 'Marcar suas próprias questões';
$string['question:useall'] = 'Usar todas as questões';
$string['question:usemine'] = 'Usar suas próprias questões';
$string['question:viewall'] = 'Ver todas as questões';
$string['question:viewmine'] = 'Ver suas próprias questões';
$string['rating:rate'] = 'Adicionar avaliações de itens';
$string['rating:view'] = 'Ver a pontuação total recebida';
$string['rating:viewall'] = 'Ver todas as avaliações dadas individualmente';
$string['rating:viewany'] = 'Ver avaliações que qualquer um recebeu';
$string['resetrole'] = 'Reconfigurar';
$string['resettingrole'] = 'Reconfigurando papel \'{$a}\'';
$string['restore:configure'] = 'Configurar opções de restauração';
$string['restore:createuser'] = 'Criar usuários na restauração de backup';
$string['restore:restoreactivity'] = 'Restaurar atividades';
$string['restore:restorecourse'] = 'Restaurar cursos';
$string['restore:restoresection'] = 'Restaurar seções';
$string['restore:restoretargetimport'] = 'Restaurar a partir de arquivos marcados para importação';
$string['restore:rolldates'] = 'Há permissão de rolar para frente as datas na recuperação de dados de backup';
$string['restore:uploadfile'] = 'Enviar arquivos para áreas de backup';
$string['restore:userinfo'] = 'Restaurar dados dos usuários';
$string['restore:viewautomatedfilearea'] = 'Restaurar cursos de backups automáticos';
$string['risks'] = 'Riscos';
$string['role:assign'] = 'Atribuir papéis a usuários';
$string['role:manage'] = 'Criar e gerenciar papéis';
$string['role:override'] = 'Anular permissões para outros';
$string['role:review'] = 'Revisar permissão para outros';
$string['role:safeoverride'] = 'Sobrepor permissões seguras';
$string['role:switchroles'] = 'Mudar para outros papéis';
$string['roleallowheader'] = 'Permitir papel:';
$string['roleallowinfo'] = 'Selecione um papel para ser adicionado à lista de papeis permitidos no contexto "{$a->context}", capacidade "{$a->cap}":';
$string['roleassignments'] = 'Atribuição de papéis';
$string['roledefinitions'] = 'Definições de papel';
$string['rolefullname'] = 'Nome';
$string['roleincontext'] = '{$a->role} em {$a->context}';
$string['roleprohibitheader'] = 'Proibir papel';
$string['roleprohibitinfo'] = 'Selecione um papel para ser adicionado á lista de papeis proibidos no contexto "{$a->context}", capacidade "{$a->cap}":';
$string['rolerepreset'] = 'Usar papel predefinido';
$string['roleresetdefaults'] = 'Padrões';
$string['roleresetrole'] = 'Usar papel ou arquétipo';
$string['rolerisks'] = 'Riscos do papel';
$string['roles'] = 'Papéis';
$string['roles_help'] = 'Um papel é uma coleção de permissões definida para todo o sistema que você pode atribuir a usuários específicos em contexto específicos.';
$string['roles_link'] = 'papéis';
$string['roleselect'] = 'Selecionar papel';
$string['rolesforuser'] = 'Papéis para usuário {$a}';
$string['roleshortname'] = 'Nome breve';
$string['roleshortname_help'] = 'O nome curto do papel é um identificador de baixo nível em que apenas caracteres alfanuméricos ASCII são permitidos. Não altere os nomes curtos de papéis padrão.';
$string['roletoassign'] = 'Papel para atribuir';
$string['roletooverride'] = 'Papel para sobrepor';
$string['safeoverridenotice'] = 'Nota: as capacidades com alto risco são bloqueadas porque você está autorizado a sobrepor apenas autorizações seguras';
$string['search:query'] = 'Realizar pesquisas em todo o site';
$string['selectanotheruser'] = 'Selecionar outro usuário';
$string['selectauser'] = 'Selecione um usuário';
$string['selectrole'] = 'Selecione um papel';
$string['showallroles'] = 'Mostrar todos os papéis';
$string['showthisuserspermissions'] = 'Mostrar as permissões para esse usuário';
$string['site:accessallgroups'] = 'Acessar todos os grupos';
$string['site:approvecourse'] = 'Aprovar criação de curso';
$string['site:backup'] = 'Efetuar o backup do curso';
$string['site:config'] = 'Mudar a configuração do site';
$string['site:configview'] = 'Ver árvore de administração do site (mas não todas as páginas nele)';
$string['site:deleteanymessage'] = 'Excluir todas as mensagens no site';
$string['site:deleteownmessage'] = 'Excluir mensagens enviadas por e para o usuário';
$string['site:doanything'] = 'Permissão para fazer tudo';
$string['site:doclinks'] = 'Mostrar links para documentos de outro site';
$string['site:forcelanguage'] = 'Substituir o idioma do curso';
$string['site:import'] = 'Importar outros cursos dentro de um curso';
$string['site:maintenanceaccess'] = 'Acessar o site enquanto estiver em modo de manutenção';
$string['site:manageallmessaging'] = 'Adicionar, excluír, bloquear e desbloquear contatos para qualquer usuário';
$string['site:manageblocks'] = 'Gerenciar blocos';
$string['site:managecontextlocks'] = 'Gerenciar o congelamento de contextos';
$string['site:messageanyuser'] = 'Ignorar as preferências de privacidade do usuário para enviar mensagens para qualquer usuário';
$string['site:mnetloginfromremote'] = 'Faça o login a partir de uma aplicação remota via MNet';
$string['site:mnetlogintoremote'] = 'Roaming para Moodle remoto';
$string['site:readallmessages'] = 'Ler todas as mensagens do site';
$string['site:restore'] = 'Restaurar backup do curso';
$string['site:senderrormessage'] = 'Enviar uma mensagem para o suporte da página de erro';
$string['site:sendmessage'] = 'Enviar mensagens para qualquer usuário';
$string['site:trustcontent'] = 'Confiar no conteúdo enviado';
$string['site:uploadusers'] = 'Enviar novos usuários por arquivo';
$string['site:viewanonymousevents'] = 'Exibir ações anônimas nos relatórios';
$string['site:viewfullnames'] = 'Sempre visualizar o nome completo do usuário';
$string['site:viewparticipants'] = 'Visualizar participantes';
$string['site:viewreports'] = 'Visualizar relatórios';
$string['site:viewuseridentity'] = 'Ver identidade completa do usuário na lista';
$string['siteadministrators'] = 'Administradores do site';
$string['tag:edit'] = 'Editar tags existentes';
$string['tag:editblocks'] = 'Editar blocos na página de tags';
$string['tag:flag'] = 'Sinalizar tags como inadequadas';
$string['tag:manage'] = 'Gerenciar todas tags';
$string['thisnewrole'] = 'Este novo papel';
$string['thisusersroles'] = 'Atribuições de papel deste usuário';
$string['unassignarole'] = 'Desatribuir papel {$a}';
$string['unassignconfirm'] = 'Você realmente quer retirar o papel "{$a->role}" do usuário "{$a->user}"?';
$string['unassignerror'] = 'Erro ao unassigning o {$a->role} papel de {$a->user} usuário.';
$string['user:changeownpassword'] = 'Mudar a própria senha';
$string['user:create'] = 'Criação de usuários';
$string['user:delete'] = 'Exclusão de usuários';
$string['user:editmessageprofile'] = 'Editar perfil de mensagens do usuário';
$string['user:editownmessageprofile'] = 'Editar o próprio perfil de mensagem de usuário';
$string['user:editownprofile'] = 'Editar o próprio perfil de usuário';
$string['user:editprofile'] = 'Editar o perfil do usuário';
$string['user:ignoreuserquota'] = 'Ignorar limite de cota de usuário';
$string['user:loginas'] = 'Logar como outros usuários';
$string['user:manageblocks'] = 'Gerenciar blocos no perfil dos outros usuários';
$string['user:manageownblocks'] = 'Gerenciar blocos no próprio perfil de usuário';
$string['user:manageownfiles'] = 'Gerenciar arquivos da na própria área de arquivos privados';
$string['user:managesyspages'] = 'Configurar o layout de página padrão para perfis de usuário público';
$string['user:readuserblogs'] = 'Ver todos os blogs do usuário';
$string['user:readuserposts'] = 'Visualizar todos as postagens do usuário nos fóruns';
$string['user:update'] = 'Atualizar perfil de usuário';
$string['user:viewalldetails'] = 'Ver informação completa do usuário';
$string['user:viewdetails'] = 'Visualizar perfil de usuário';
$string['user:viewhiddendetails'] = 'Visualizar detalhes ocultos dos usuários';
$string['user:viewlastip'] = 'Ver último endereço IP do usuário';
$string['user:viewuseractivitiesreport'] = 'Visualizar relatório de atividade oculta';
$string['user:viewusergrades'] = 'Visualizar notas do usuário';
$string['usersfrom'] = 'Usuário de {$a}';
$string['usersfrommatching'] = 'Usuários de {$a->contextname} que correspondem a \'{$a->search}\'';
$string['usersinthisx'] = 'Usuários nesta {$a}';
$string['usersinthisxmatching'] = 'Usuários nesta {$a->contexttype} que correspondem a \'{$a->search}\'';
$string['userswithrole'] = 'Todos os usuários com um papel';
$string['userswiththisrole'] = 'Usuários com papel';
$string['useshowadvancedtochange'] = 'Use \'Mostrar avançados\' para mudar';
$string['viewingdefinitionofrolex'] = 'Vendo a definição do papel \'{$a}\'';
$string['viewrole'] = 'Visualizar detalhes dos papéis';
$string['webservice:createmobiletoken'] = 'Criar um token para o web service de acesso móvel';
$string['webservice:createtoken'] = 'Criar um token de web service';
$string['webservice:managealltokens'] = 'Gerenciar todos os tokens de webservices dos usuários';
$string['whydoesuserhavecap'] = 'Por que {$a->fullname} ter {$a->capability} capacidade em {$a->context} contexto?';
$string['whydoesusernothavecap'] = 'Por não ter {$a->fullname} {$a->capability} capacidade em {$a->context} contexto?';
$string['xroleassignments'] = 'Atribuições de papéis para {$a}';
$string['xuserswiththerole'] = 'Usuários com o papel "{$a->role}"';
