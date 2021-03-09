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
 * Strings for component 'grouptool', language 'es_mx', version '3.10'.
 *
 * @package     grouptool
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activated_group'] = 'Grupo activado';
$string['activated_groups'] = '¡Grupos activados!';
$string['active'] = 'Activo';
$string['activegroups'] = 'Grupos activos';
$string['add_member'] = 'Se añadió <strong>{$a->username}</strong> al grupo <strong>{$a->groupname}</strong>';
$string['added_member'] = 'Se añadió <strong>{$a->username}</strong> al grupo <strong>{$a->groupname}</strong>';
$string['administration'] = 'Administración';
$string['administration_alt'] = 'Creación de grupo/agrupamiento, y configuraciones para grupos activos de esta instancia';
$string['agroups'] = 'Grupos activos';
$string['ajax_edit_size_help'] = 'Guardar nuevo tamaño con &lt;Enter&gt;, use &lt;ESC&gt; para lograr abortar, deje vacío para eliminar tamaño individual';
$string['all_groups_full'] = '¡<strong>{$a}</strong> no pudo ser registrado en ningún grupo porque todos los grupos están llenos!';
$string['allow_multiple'] = 'Registros múltiples';
$string['allow_multiple_help'] = 'Permitirle a los estudiantes que se registren en más de 1 grupo al mismo tiempo. Usted tiene que especificar cuantos grupos tienen al menos para escoger  (= grupos mínimos para escoger) y cuantos grupos tienen permitidos como máximo para escoger (= grupos máximos para escoger).';
$string['allow_reg'] = 'Habilitar auto registro';
$string['allow_reg_help'] = 'Habilitar auto registro para estudiantes, de forma tal que puedan registrarse ellos mismos en los grupos activos, que son escogidos debajo.';
$string['allow_unreg'] = 'Permitir des-registro';
$string['allow_unreg_help'] = 'Permitirles a los estudiantes des-registrarse de, o cambiarse a otros grupos antes de la fecha-límite (opcional).';
$string['allowed'] = 'Permitido';
$string['already_marked'] = '¡Este grupo ya estaba marcado para registro!';
$string['already_member'] = '<strong>{$a->username}</strong> ya es miembro del grupo <strong>{$a->groupname}</strong>';
$string['already_occupied'] = '¡El lugar en el grupo <strong>{$a->grpname}</strong>ya está ocupado porque otro usuario completó el registro más rápidamente. ¡Por favor busque otro grupo!';
$string['already_queued'] = '<strong>{$a->username}</strong> ya está puesto en cola  en el grupo <strong>{$a->groupname}</strong>!';
$string['already_registered'] = '<strong>{$a->username}</strong> ya está registrado en el grupo <strong>{$a->groupname}</strong>!';
$string['alwaysshowdescription'] = 'Siempre mostrar descripción';
$string['alwaysshowdescription_help'] = 'Si se deshabilita, la descripción de arriba solamente se volverá visible para los estudiantes durante el período de registro.';
$string['asterisk_marks_moodle_registrations'] = 'Los usuarios con un asterisco inicial (*) ya están registrados en el Grupo-Moodle respectivo';
$string['availabledate'] = 'Inicio del registro';
$string['availabledate_help'] = 'Inicio del período de registro. Después de esta fecha los estudiantes pueden registrarse ellos mismos en los grupos seleccionados (si estuviera habilitado).';
$string['availabledateno'] = 'Siempre disponible';
$string['cant_enrol'] = 'No pued inscribir usuario automáticamente en curso.';
$string['cfg_addinstanceset_head'] = 'Configuraciones de instancia adicional';
$string['cfg_addinstanceset_head_info'] = 'Configuraciones adicionales para herramientagrupo.';
$string['cfg_admin_head'] = 'Configuraciones por defecto en administración de vista';
$string['cfg_admin_head_info'] = 'Configuraciones estándar para pestaña de administración en vista-herramientagrupo.';
$string['cfg_allow_multiple'] = 'Registros múltiples';
$string['cfg_allow_multiple_desc'] = 'Permitir por defecto a estudiantes que se registren en más de un grupo al mismo tiempo.';
$string['cfg_allow_reg'] = 'Permitir auto registro';
$string['cfg_allow_reg_desc'] = 'Habilitar por defecto que los estudiantes se registren ellos mismos';
$string['cfg_allow_unreg'] = 'Permitir des-registro';
$string['cfg_allow_unreg_desc'] = '¿Pueden los usuarios des-registrarse ellos mismos y cambiar de grupo?';
$string['cfg_choose_max'] = 'Elegir máximo';
$string['cfg_choose_max_desc'] = '¿En cuantos grupos se pueden registrar los usuarios al mismo tiempo por defecto?';
$string['cfg_choose_min'] = 'Elegir mínimo';
$string['cfg_choose_min_desc'] = '¿Cuantos grupos tienen los usuarios como mínimo para elegir por defecto?';
$string['cfg_force_dereg'] = 'Forzar des-registro en grouptool';
$string['cfg_force_dereg_desc'] = 'Forzar des-registro no solamente en grouptool, sino también del grupo de Moodle.';
$string['cfg_force_importreg'] = 'Forzar registro en herramientagrupo';
$string['cfg_force_importreg_desc'] = 'Forzar mediante herramientagrupo en grupo-Moodle que los usuarios importados sean registrados a la fuerza en esa instancia de grupo también.';
$string['cfg_groups_queues_limit'] = 'Lugares en cola por grupo';
$string['cfg_groups_queues_limit_desc'] = 'Determinar cuantos diferentes estudiantes pueden ser puestos en cola en un grupo al mismo tiempo por defecto.';
$string['cfg_grpsize'] = 'Tamaño de grupo estándar global';
$string['cfg_grpsize_desc'] = 'Tamaño de grupo estándar usado en todas partes en herramientagrupo';
$string['cfg_ifgroupdeleted'] = 'Si los grupos son eliminados';
$string['cfg_ifgroupdeleted_desc'] = 'Los grupos eliminados ¿deberían de ser recreados para la instancia de herramientagrupo o deberían de ser eliminadas las referencias en herramientagrupo (incluyendo datos-del-grupo, registros y cola)? Nota: Si Usted selecciona "recrear grupo", entonces los grupos serán recreados automáticamente después de la eliminación debajo de "Administración del grupo / Usuarios / Grupos".';
$string['cfg_ifmemberadded'] = 'si los grupos son añadidos';
$string['cfg_ifmemberadded_desc'] = 'Los nuevos miembros de grupo añadidos mediante Moodle, ¿ deberían de añadirse también en herramientagrupo, o ser ignorados?';
$string['cfg_ifmemberremoved'] = 'si son eliminados miembros de grupo';
$string['cfg_ifmemberremoved_desc'] = '¿Deberían los registros de herramientagrupo ser eliminados si los usuarios son eliminados del grupo-Moodle correspondiente?';
$string['cfg_immediate_reg'] = 'Registro inmediato';
$string['cfg_immediate_reg_desc'] = '¿Deberían de pasarse a los grupos de Moodle todos los registros?';
$string['cfg_importfields'] = 'Comparar campos para importar/des-registrar';
$string['cfg_importfields_desc'] = 'Define cuales campos en la tabla de usuario van a ser comparados con los datos al importar/des-registrar usuarios. Estos campos son buscados uno-a-uno hasta que se encuentre una concordancia única. Los valores posibles/útiles son por ejemplo: username, idnumber, email. ATENCIÓN: no hay revisión para nombres de campo correctos. Caracteres permitidos: a-z, A-Z y \',\'';
$string['cfg_instance_head'] = 'Configuraciones por defecto de instancia';
$string['cfg_instance_head_info'] = 'Configuraciones por defecto para nuevas instancias de herramientagrupo.';
$string['cfg_max_queues'] = 'Lugares-en-cola máximos simultáneos por participante';
$string['cfg_max_queues_desc'] = 'Determina en cuantos grupos diferentes se puede poner en cola un usuario al mismo tiempo por defecto.';
$string['cfg_moodlesync_head'] = 'Comportamiento de sincronización';
$string['cfg_moodlesync_head_info'] = 'Como debería de comportarse herramientasgrupo si los miembros de grupo de Moodle son añadidos/eliminados o si se eliminan grupos únicos';
$string['cfg_name_scheme'] = 'Esquema de nombre estándar';
$string['cfg_name_scheme_desc'] = 'Esquema de nombre estándar usado para creación de grupo';
$string['cfg_show_members'] = 'Mostrar miembros de grupo';
$string['cfg_show_members_desc'] = 'Determina si es que los miembros del grupo deberían ser visibles por defecto';
$string['cfg_use_individual'] = 'Usar tamaño individual';
$string['cfg_use_individual_desc'] = 'Si por defecto debería de usarse un tamaño de grupo individual para cada grupo';
$string['cfg_use_queue'] = 'Usar cola';
$string['cfg_use_queue_desc'] = 'Si deberían de usarse por defecto colas para registro en grupos llenos.';
$string['cfg_use_size'] = 'Usar tamaño del grupo';
$string['cfg_use_size_desc'] = 'Si por defecto debería estar limitado el tamaño de grupo';
$string['cfg_users_queues_limit'] = 'Lugares en cola por usuario';
$string['cfg_users_queues_limit_desc'] = 'Determinar en cuantos diferentes grupos un usuario puede ser puesto en cola al mismo tiempo por defecto.';
$string['change_group'] = 'Cambiar grupo';
$string['change_group_to'] = '¿Continuar con cambio de grupo a <strong>{$a->groupname}</strong>?';
$string['change_group_to_success'] = '¡Cambio de grupo exitoso! <strong>{$a->username}</strong> ahora está registrado en el grupo <strong>{$a->groupname}</strong>!';
$string['changes_saved'] = 'Cambios guardados';
$string['checkbox_control_header'] = 'De-/seleccionar grupos y agrupamientos';
$string['checkbox_control_header_help'] = '<p>Al usar esta función Usted puede activar / desactivar grupos de uno o más agrupamientos adentro de su grouptool:
<ol>
<li>Elegir en el campo de selección-múltiple "Todos" (todos los grupos disponibles serán activados / desactivados), un agrupamiento o varios agrupamientos (al usar Ctrl + Clic).</li>
<li>Use una de las siguientes opciones "Seleccionar/ Des-seleccionar/ Invertir":
<ul>
<li><b>Seleccionar:</b> Los grupos de los agrupamiento(s) seleccionados serán activados.</li>
<li><b>Des-seleccionar:</b> Los grupos de los agrupamientos  seleccionados serán desactivados </li>
<li><b>Invertir:</b> Todos los grupos de los agrupamientos no-elegidos serán activados. </li>
</ul>
</li>
<li>Asuma su elección al hacer clic en el botón "Ir".</li>
</ol>
</p>';
$string['choose'] = 'Elegir...';
$string['choose_group'] = '¡Usted debe elegir un grupo destino!';
$string['choose_max'] = 'Máximo de grupos a elegir';
$string['choose_max_text'] = '¡Usted tiene permitido elegir <strong>{$a}</strong> grupo(s) como máximo!';
$string['choose_min'] = 'Máximo de grupos a elegir';
$string['choose_min_max_text'] = '¡Usted tiene que elegir entre <strong>{$a->min}</strong> y <strong>{$a->max}</strong> grupos!';
$string['choose_min_text'] = '¡Usted tiene que elegir al menos <strong>{$a}</strong> gupo(s)!';
$string['choose_minmax_title'] = 'Grupos para elegir';
$string['choose_targetgroup_import'] = 'Importar a grupo(s)';
$string['choose_targetgroup_unregister'] = 'Des-registrar de grupo(s)';
$string['chooseactivity'] = 'Usted tiene que elegir un actividad antes de que puedan mostrar datos.';
$string['condition_prevent_access'] = '¡Las condiciones actuales le impiden acceder a la instancia de grouptool!';
$string['confirm_delete'] = 'Usted está a punto de eliminar completamente el grupo. Esto quitará a todos los miembros de este grupo de una forma irrecuperable. ¿Está Usted SEGURO de que desea continuar?';
$string['confirm_delete_title'] = '¿Realmente quiere eliminar este elemento?';
$string['copied_grade_feedback'] = 'Calificación de grupo<br />
+envío de: <strong>{$a->student}</strong><br />
+Calificado por: <strong>{$a->teacher}</strong><br />
+Fecha/Hora Original: <strong>{$a->date}</strong><br />
+Retroalimentación: <strong>{$a->feedback}</strong>';
$string['copy'] = 'Copiar';
$string['copy_chosen'] = 'Copiar elegido';
$string['copy_grade_confirm'] = '¿Continuar copiando esta calificación?';
$string['copy_grade_overwrite_confirm'] = '¿Continuar copiando esta calificación? ¡Las calificaciones previas existentes serán sobre-escritas!';
$string['copy_grades_confirm'] = '¿Continuar copiando estas calificaciones?';
$string['copy_grades_errors'] = 'Ocurrió al menos un error al copiar las calificaciones:';
$string['copy_grades_overwrite_confirm'] = '¿Continuar copiando estas calificaciones? ¡Las calificaciones anteriores existentes serán sobre-escritas!';
$string['copy_grades_success'] = 'Las calificaciones siguientes fueron actualizadas exitosamente:';
$string['copy_refgrades_feedback'] = 'Copiar retroalimentaciones y calificaciones de referencia para grupos seleccionados y miembros de otro grupo.';
$string['copygrade'] = 'Copiar calificación';
$string['could_not_add'] = 'No se pudo añadir <strong>{$a->username}</strong> al grupo <strong>{$a->groupname}</strong>';
$string['couldnt_move_down'] = '¡ No pudo moverse el grupo hacia abajo !';
$string['couldnt_move_up'] = '¡ No pudo moverse el grupo hacia arriba !';
$string['createGroups'] = 'Crear grupos';
$string['create_1_person_groups'] = 'Crear grupos de 1 persona';
$string['create_1_person_groups_help'] = 'Crear grupos de 1 persona - aquí es creado un grupo  para cada usuario elegido. Además de # y @ Usted puede usar las siguientes marcas que serán remplazadas con los datos del usuario:
<ul>
<li>[username] - el nombre_de_usuario del usuario</li>
<li>[firstname] - el nombre del usuario</li>
<li>[lastname] - apellido(s) del usuario</li>
<li>[idnumber] -el idnumber (númeroID) del usuario</li>
</ul>
Si faltaran algunos datos la marca será remplazada por nombredemarcaXX donde XX representa al número del grupo.';
$string['create_assign_groupings'] = 'Crear/Asignar agrupamientos';
$string['create_fromto_groups'] = 'Crear grupos con números de un intervalo (por ejemplo, del 34 al 89), <strong>sin asignación automática</strong> de miembros de grupo';
$string['create_fromto_groups_help'] = 'Crear grupos con números de un intervalo (por ejemplo de 34 a 89) - use este modo para crear grupos (faltantes) (por ejemplo Group 4, Group 5, Group 6). Solamente inserte límites y cuantos dígitos quiere usar como mínimo para los nombres (por ejemplo 1, 01, 001, 0001...). Es posible definir un cierto tamaño de grupo con "Number of group Members M". <strong>NO habrá asignación automática</strong> de miembros del grupo.';
$string['create_groupings_confirm'] = '¿Continuar creando agrupamientos como se previsualizaron arriba?';
$string['create_groupings_confirm_problem'] = '¡Ocurrió al menos un error (refiérase a la vista previa de arriba)!';
$string['create_groups_confirm'] = '¿Continuar creando grupos como se previsualizaron arriba?';
$string['create_groups_confirm_problem'] = 'Fueron encontrados conflictos al tratar de crear los nuevos grupos basados en el esquema dado del nombre - vea vista previa - Los grupos de Moodle deben de tener nombres únicos. El conflicto puede ser debido a grupos existentes con el mismo nombre o a un error de sintaxis en el esquema de nombrarlos (por ejemplo, vacío, símbolo # faltante).';
$string['create_n_m_groups'] = 'Crear N grupos para M miembros, <strong>sin asignación automática</strong> de miembros de grupo';
$string['create_n_m_groups_help'] = 'Crear N grupos para M miembros - Crear con este módulo un número específico de grupos (N grupos) con un tamaño específico del grupo (M miembros); por ejemplo, siete grupos con espacio para tres miembros cada uno.  <strong>No habrá asignación automática</strong> de miembros del grupo.';
$string['createinsertgrouping'] = 'Añadir al agrupamiento';
$string['deactivated_group'] = 'Grupo desactivado';
$string['deactivated_groups'] = '¡Grupos desactivados!';
$string['define_amount_groups'] = 'Definir número de grupos N';
$string['define_amount_members'] = 'Definir número de miembros de grupo M';
$string['define_amount_members_help'] = 'Definir número de miembros de grupo M - Aquí Usted le dice a grouptool cuantos miembros debería idealmente tener cada grupo. La cantidad necesaria de grupos será calculada automáticamente. Si Usted activa el impedir el último grupo pequeño, los usuarios en este grupo se reparten en los otros si la proporción de último grupo es menor al 70%.';
$string['delete_reference'] = 'Eliminar de herramientagrupo';
$string['description'] = 'Descripción';
$string['deselect'] = 'Des-seleccionar';
$string['determinismerror'] = 'El fin del registro no puede ser antes del inicio del registro ni estar en el pasado.';
$string['digits'] = 'Dígitos mínimo';
$string['disabled'] = 'Deshabilitado';
$string['drag'] = 'Mover';
$string['due'] = 'Herramientagrupo pendiente';
$string['duedate'] = 'Fin del registro';
$string['duedate_help'] = 'Fin del período de registro. Después de esta fecha, los estudiantes ya no podrán registrarse ellos mismos y el profesor obtiene acceso para resolver-colas-funcionalidad, etc.';
$string['duedateno'] = 'Sin fecha prometida';
$string['early'] = '{$a} tempranamente';
$string['error_activating_group'] = '¡Error al activar al grupo <strong>{$a->groupid}</strong> en grouptool <strong>{$a->grouptoolid}</strong>!';
$string['error_at'] = 'Error en';
$string['error_deactivating_group'] = '¡Error al desactivar al grupo <strong>{$a->groupid}</strong> en grouptool <strong>{$a->grouptoolid}</strong>!';
$string['error_getting_data'] = '¡Error al obtener datos del grupo! ¡Ya sea que ningun grupo o más de un grupo fueron regresados!';
$string['error_saving_new_order'] = 'Error al guardar nuevo orden para grupos: <strong>{$a}</strong>';
$string['eventagrpcreated'] = 'Grupo-activo creado';
$string['eventagrpdeleted'] = 'Grupo-activo eliminado';
$string['eventagrpsupdated'] = 'Grupo-activo actualizado';
$string['eventdequeuingstarted'] = 'Quitando de cola iniciado';
$string['eventgroupcreationstarted'] = 'Creación-de-grupo iniciada';
$string['eventgroupgraded'] = 'Grupo calificado';
$string['eventgroupingscreated'] = 'Agrupamientos creados';
$string['eventgrouprecreated'] = 'Grupo recreado';
$string['eventoverviewexported'] = 'Vista general exportada';
$string['eventqueueentrycreated'] = 'Entrada en cola creada';
$string['eventqueueentrydeleted'] = 'Entrada en cola eliminada';
$string['eventregistrationcreated'] = 'Registro creado';
$string['eventregistrationdeleted'] = 'Registro eliminado';
$string['eventregistrationpushstarted'] = 'Empuje de registro iniciado';
$string['eventuserimported'] = 'Usuario importado';
$string['eventuserlistexported'] = 'Lista-de-usuarios exportada';
$string['eventusermoved'] = 'Usuario movido';
$string['exceedgroupqueuelimit'] = '¡Excediendo el límite para cola del grupo!';
$string['exceedgroupsize'] = '¡Se excede el tamaño del grupo!';
$string['exceeduserqueuelimit'] = '¡Se excede el límite de cola de usuarios!';
$string['exceeduserreglimit'] = '¡Se excede el límite de registro de usuarios!';
$string['feedbackplural'] = 'Retroalimentaciones';
$string['filters_legend'] = 'Filtrar datos';
$string['filterunoccupied'] = 'Mostrar solamente grupos con lugares libres';
$string['followchanges'] = 'Seguir cambios';
$string['forceregistration'] = 'Forzar registro en herramientagrupo';
$string['forceregistration_help'] = 'Por favor tenga en cuenta que los grupos de herramientagrupo difieren fundamentalmente de los grupos estándar de Moodle del curso. Active la casilla si Usted quiere importar los usuarios dentro del grupo de herramientagrupo además de importarlos al grupo estándar de Moodle.';
$string['found_multiple'] = 'No puede identificar único, se encontaron múltiples usuarios:';
$string['free'] = 'Gratuito';
$string['fromgttoerror'] = 'El valor de hasta- tiene que ser mayor o igual al valor de desde-';
$string['fullgroup'] = 'El grupo está lleno';
$string['general_information'] = 'Información general';
$string['general_registration_exception'] = '¡Ocurrió una excepción del registro general y no podemos determinar automáticamente el porqué!';
$string['global_userstats'] = '<strong>{$a->reg_users}</strong> de <strong>{$a->users}</strong> usuarios están registrados. <strong>{$a->notreg_users}</strong> todavía sin registro.';
$string['grading'] = 'Calificar';
$string['grading_activity_title'] = 'Actividad';
$string['grading_alt'] = 'Herramientas para copiar calificaciones de 1 miembro del grupo a todos los demás en el grupo, ya sea para un grupo o para un conjunto de grupos.';
$string['grading_filter_select_title'] = 'Grupo o grupos';
$string['grading_filter_select_title_help'] = 'Elegir cual grupo o grupos usar:<ul><li>Sin conflictos - todos los grupos, en donde solamente un miembro del grupo fue calificado para la actividad elegida</li><li>Todos - todos los grupos</li><li>"Nombre del grupo" - solamente el grupo específicamente seleccionado</li></ul>';
$string['grading_grouping_select_title'] = 'Filtrar agrupamiento';
$string['group_administration'] = 'Administrar grupos';
$string['group_administration_alt'] = 'Administrar grupos (activos) y agrupamientos';
$string['group_assign_error'] = '¡No pudo asignarse grupo!';
$string['group_assign_error_prev'] = '¡No puede asignarse grupo!';
$string['group_creation'] = 'Crear grupos';
$string['group_creation_alt'] = 'Crear grupos';
$string['group_creation_failed'] = '¡Falló la creación de grupos!';
$string['group_creation_success'] = '¡Grupos creados exitosamente!';
$string['group_not_found'] = '¡El grupo <strong>{$a->groupid}</strong> no se pudo encontrar en grouptool <strong>{$a->grouptoolid}</strong>!';
$string['group_not_in_grouping'] = '¡El grupo elegido no es miembro del agrupamiento elegido!';
$string['group_or_member_count'] = 'Número de Grupos/Miembros';
$string['group_places'] = 'Lugares del grupo';
$string['group_places_help'] = 'El campo \'group place\' (lugar de grupo) informa (separadas por barra invertida) acerca del número total de lugares en el grupo, en segundo lugar informa acerca del número de lugares libres y en tercer lugar informa acerca de lugares en el grupo que ya están ocupados.';
$string['groupchange_from_non_unique_reg'] = '¡No puede cambiarse grupo debido a que el grupo anterior no es único!';
$string['groupcreation'] = 'Cración de grupo';
$string['groupcreationmode'] = 'Modo';
$string['groupfromtodigits'] = 'Desde, hasta &amp; dígitos en nombres de grupos:';
$string['groupinfo'] = 'Información del grupo';
$string['grouping_assign_error'] = 'NO pudo asignarse exitosamente al agrupamiento:';
$string['grouping_assign_error_prev'] = 'NO puede asignarse exitosamente al agrupamiento:';
$string['grouping_assign_success'] = 'Fue asignado exitosamente:';
$string['grouping_assign_success_prev'] = 'Puede ser asignado exitosamente:';
$string['grouping_creation_error'] = '¡No pudo crearse agrupamiento!';
$string['grouping_creation_error_prev'] = '¡No puede crearse agrupamiento!';
$string['grouping_creation_only_success'] = '¡Agrupamiento creao exitosamente';
$string['grouping_creation_only_success_prev'] = '¡El agrupamiento puede crearse exitosamente!';
$string['grouping_creation_success'] = '¡Exitosamente se creó agrupamiento y se le asignó el grupo <strong>{$a}</strong> a éste!';
$string['grouping_creation_success_prev'] = '¡Puede crear agrupamiento y asignarle grupo exitosamente <strong>{$a}</strong> al mismo!';
$string['grouping_exists_error'] = '¡No pudo crearse agrupamiento porque ya existe un agrupamiento con este mismo nombre!';
$string['grouping_exists_error_prev'] = '¡No puede crearse agrupamiento porque ya existe un agrupamiento con este mismo nombre!';
$string['groupings_created_and_groups_added'] = '¡Agrupamiento(s) creado y/o grupo(s) añadido(s)!';
$string['groupingscreation'] = 'Crear y asignar agrupamientos';
$string['groupingselect'] = 'Agrupamientos para los grupos seleccionados';
$string['groupingselect_help'] = 'Creando agrupamientos para los grupos seleccionados:<ul>
<li>Crear UN agrupamiento para todos los grupos seleccionados. El nombre del agrupamiento puede ser elegido libremente.</li>
<li>Crear un agrupamiento para CADA grupo seleccionado. El agrupamiento es nombrado de acuerdo al grupo respectivo.</li>
<li>Añadir grupos seleccionados a un agrupamiento existente</li></ul>';
$string['groupoverview'] = 'Vista general del grupo';
$string['groups_created'] = '¡Grupos creados exitosamente!';
$string['groups_queues_limit'] = 'Lugares en cola por grupo';
$string['groups_queues_limit_help'] = 'Limita los lugares en cola disponibles por grupo si se activa';
$string['groupselection'] = 'Selección de grupo';
$string['groupselection_help'] = 'Elegir los grupos / las personas para los que Usted desea copiar la calificación-referencia y retroalimentación-referencia elegidas al activar la casilla correspondiente. Si solamente 1 grupo es mostrado, Usted selecciona el origen para copiar la calificación elegida al usar el botón correspondiente a la derecha de la entrada.';
$string['groupsize'] = 'Tamaño del grupo';
$string['groupsize_gets_enabled'] = 'Si Usted continúa, groupsize (tamañodegrupo) será habilitado automáticamente. Impida este comportamiento al usar 0 como <strong>{$a->field}</strong>';
$string['groupsize_individual_gets_enabled'] = 'Si Usted continua, el tamaño de grupo individual será habilitado automáticamente. Impida este comportamiento al usar 0 como  <strong>{$a->field}</strong> para no usar tamaño de grupo para nada, ¡ o use <strong>{$a->globalsize}</strong> para habilitar solamente tamaño de grupo global!';
$string['groupstatus'] = 'Estatus';
$string['groupstatus_help'] = 'El estatus actual de un grupo es visualizado por el color:<ul><li>Verde - grupo activo. El grupo está asignado a este  grouptool. Si está activo el auto-registro, los estudiantes se pueden registrar a este grupo.</li><li>Gris - grupo inactivo. El grupo no está disponible en este grouptool.</li></ul>El estatus puede cambiarse al hacer clic en el símbolo.';
$string['grouptool'] = 'Herramientagrupo';
$string['grouptool:addinstance'] = 'Añadir una instancia de herramientagrupo al curso.';
$string['grouptool:administrate_groups'] = 'Administra grupos (activos) y agrupamientos';
$string['grouptool:create_groupings'] = 'Crear agrupamientos usando herramientagrupo.';
$string['grouptool:create_groups'] = 'Crear grupos usando herramientagrupo';
$string['grouptool:export'] = 'Exportar datos de registro y de grupo a diferentes formatos';
$string['grouptool:grade'] = 'Copiar calificaciones de un miembro-de-grupo a otros';
$string['grouptool:grade_own_group'] = 'Copiar calificaciones de un miembro-del-grupo a otros si la calificación original fue dada por mí';
$string['grouptool:move_students'] = 'Mover estudiantes hacia otros grupos.';
$string['grouptool:register'] = 'Registrarse a sí mismo en un grupo activo usando herramientagrupo';
$string['grouptool:register_students'] = 'Registrar estudiantes en un grupo activo usando grouptool. (También usado para resolver colas)';
$string['grouptool:unregister_students'] = 'Des-registrar estudiantes de grupos usando grouptool.';
$string['grouptool:view_description'] = 'Ver descripción de herramientagrupo';
$string['grouptool:view_groups'] = 'Ver grupos activos';
$string['grouptool:view_own_registration'] = 'Ver registro(s)  propio(s)';
$string['grouptool:view_registrations'] = 'Ver quien está registrado/en-cola en cual grupo activo usando herramientagrupo';
$string['grouptool:view_regs_course_overview'] = 'Ver una lista de usuarios conteniendo quien está registrado/en-cola en cual grupo activo usando heramientagrupo.';
$string['grouptool:view_regs_course_view'] = 'Ver una lista de usuarios conteniendo quien está registrado/en-cola en cual grupo activo usando heramientagrupo.';
$string['grouptool:view_regs_group_overview'] = 'Ver una lista de usuarios conteniendo quien está registrado/en-cola en cual grupo activo usando heramientagrupo.';
$string['grouptool:view_regs_group_view'] = 'Ver una lista agrupada conteniendo quien está registrado/en-cola en cual grupo activo usando heramientagrupo.';
$string['grouptoolfieldset'] = 'Configuraciones de instancia';
$string['grouptoolname'] = 'Nombre de herramientagrupo';
$string['grouptoolname_help'] = 'El nombre de la instancia-herramientagrupo';
$string['groupuser_import'] = 'Importar usuarios de grupo';
$string['groupuser_unregister'] = 'Des-registrar  usuarios de grupo';
$string['grp_marked'] = 'Marcado para registro';
$string['grpsizezeroerror'] = 'El tamaño del grupo debe ser mayor o igual a 1. No se permiten letras ni otros signos.';
$string['ifgroupdeleted'] = 'si el grupo es eliminado';
$string['ifgroupdeleted_help'] = 'Los grupos eliminados ¿deberían de ser recreados para la instancia de herramientagrupo o deberían de ser eliminadas las referencias en herramientagrupo (incluyendo datos-del-grupo, registros y cola)? Nota: Si Usted selecciona "recrear grupo", entonces los grupos serán recreados automáticamente después de la eliminación debajo de "Administración del grupo / Usuarios / Grupos".';
$string['ifmemberadded'] = 'si son añadidos miembros del grupo';
$string['ifmemberadded_help'] = '¿Deberían los nuevos miembros de grupo añadidos via Moodle ser también registrados en herramientagrupo o deberáin ser ignorados?';
$string['ifmemberremoved'] = 'si son removidos miembros del grupo';
$string['ifmemberremoved_help'] = '¿Deberían los registros de herramientagrupo ser eliminados si los usuarios son eliminados del grupo-Moodle correspondiente?';
$string['ignorechanges'] = 'Ignorar cambios';
$string['ignored_not_found_users'] = '¡Al menos un usuario no pudo ser añadido al grupo!';
$string['ignored_not_found_users_unregister'] = '¡No se pudo encontrar al menos a un usuario!';
$string['ignoring_not_found_users'] = 'Al menos un usuario no se encontró en la BasedeDatos. ¡Todos esos usuarios serán ignorados!';
$string['immediate_reg'] = 'Registro inmediato';
$string['immediate_reg_help'] = 'Si se habilita, el des-registro será enviado al sistema de Moodle. Si no se habilita, los registros son cacheados y pueden ser empujados al sistema Moodle por el profesor.';
$string['import'] = 'Importar';
$string['import_conflict_user_queued'] = '¡El usuario <strong>{$a->fullname}</strong> ya está puesto en cola en el grupo <strong>{$a->groupname}</strong>!';
$string['import_desc'] = 'Importar usuarios mediante lista de números-ID dentro de ciertos grupos';
$string['import_in_inactive_group_rejected'] = 'El registro en grupo grouptool <strong>{$a}</strong> ha sido rechazado debido a su inactividad. Active al grupo en este grouptool para habilitar el registro.';
$string['import_in_inactive_group_warning'] = 'Nota: Grupo <strong>{$a}</strong> actualmente está inactivo dentro del contexto de grouptool y por lo tanto no será mostrado.';
$string['import_progress_completed'] = 'Importación completada';
$string['import_progress_import'] = 'Importar usuario';
$string['import_progress_preview_completed'] = 'Importar-vista-previa completada';
$string['import_progress_search'] = 'Buscar usuario';
$string['import_progress_start'] = 'Iniciar importación';
$string['import_skipped'] = '¡Se saltó al usuario <strong>{$a->fullname}</strong> para el grupo <strong>{$a->groupname}</strong>!';
$string['import_user'] = 'Importar <strong>{$a->fullname}</strong> (<strong>{$a->idnumber}</strong>) enel grupo <strong>{$a->groupname}</strong> tuvo éxito.';
$string['import_user_prev'] = 'Importar <strong>{$a->fullname}</strong> (<strong>{$a->idnumber}</strong>) en el grupo <strong>{$a->groupname}</strong>.';
$string['import_user_problem'] = 'Problema durante la importación de <strong>{$a->fullname}</strong> (<strong>{$a->idnumber}</strong> - <strong>{$a->id}</strong>) en el grupo <strong>{$a->groupname}</strong>.';
$string['importbutton'] = 'Importar usuarios';
$string['inactive'] = 'Inactivo';
$string['inactivegroups'] = 'Grupos inactivos';
$string['inactivegroups_hide'] = 'Ocultar grupos inactivos';
$string['inactivegroups_show'] = 'Mostrar grupos inactivos';
$string['includedeleted'] = 'Incluir usuarios eliminados';
$string['includedeleted_help'] = 'Si se activa, los usuarios eliminados no serán filtrados afuera de la lista. Las cuentas de usuarios eliminadas no pueden ser inscritas en el curso durante el proceso de importación.';
$string['incomplete_only_label'] = 'Mostrar solamente grupos con calificaciones faltantes';
$string['incorrect_tab'] = '¡Pestaña incorrecta; esta pestaña no está disponible!';
$string['individual_size_info'] = '* Tamaño-de-grupo de configuraciones herramientagrupo';
$string['intro'] = 'DFescripción';
$string['invert'] = 'Invertir';
$string['landscape'] = 'Apaisado';
$string['late'] = '{$a} tardío';
$string['limit'] = 'límite';
$string['loading'] = 'cargando...';
$string['max_queues_reached'] = '¡Colas máximas alcanzadas!';
$string['max_regs_reached'] = '¡Registros máximos alcanzados!';
$string['maxmembers'] = 'Tamaño de grupo global';
$string['messageprovider:grouptool_moveupreg'] = 'Registro mediante ascenso en la cola';
$string['missing_source_selection'] = '¡No se seleccionaron orígenes!';
$string['modulename'] = 'Herramientagrupo';
$string['modulename_help'] = 'El módulo de Herramientagrupo sirve para diferentes tipos de trabajos relacionados con los grupos:<ul><li>Permite crear grupos en diferentes modos  (cantidad de grupos/miembros del grupo, grupos de una persona, intervalos de grupos), además de agrupamientos para cada grupo.</li><li>Además, puede usarse para darle a los estudiantes la oportunidad de registrarse ellos mismos a ciertos grupos durante un período definido.</li><li>El módulo también tiene la habilidad de calificar por grupos, por ejemplo al copiar calificaciones de actividad de un miembro del grupo a otros miembros del grupo.</li><li>Importación de usuarios adentro de grupos mediante una lista de números de ID (ID-numbers)</li><li>vista general de todos los grupos del curso incluyendo a todos los registros, miembros, colas en espera, etc. Y la habilidad para exportar estos datos hacia diferentes formatos de archivos (PDF/XLSX/ODS/TXT).</li><li>Lista exportable de todos los usuarios del curso incluyendo sus registros, colas en espera, etc.</li></ul><p>(!) Por favor tenga en cuenta que los grupos en la Herramientagrupo difieren fundamentalmente de los grupos estándar de Moodle del curso. Para asegurar consistencia entre los tipos de grupos, configure las parámetros de la sección  "Comportamiento a los cambios en Moodle" a "seguir cambios".</p>';
$string['modulenameplural'] = 'Herramientagrupos';
$string['moodlesync'] = 'Comportamiento sobre cambios en Moodle';
$string['moodlesync_help'] = 'Como debería de comportarse herramientasgrupo si los miembros de grupo de Moodle son añadidos/eliminados o si se eliminan grupos únicos';
$string['move_user'] = 'Mover desde la cola al grupo';
$string['movedown'] = 'Mover 1 abajo';
$string['moveup'] = 'Mover 1 arriba';
$string['multiple'] = 'Gestionar usuarios de grupo';
$string['multiple_desc'] = 'Registros/Des-registros Múltiples';
$string['must_specify_groupingname'] = '¡Usted tiene que proporcionar un nombre para este agrupamiento!';
$string['mustbegt0'] = 'El mínimo de grupos a elegir debe ser mayor o igual a 0. No se permiten letras ni otros signos.';
$string['mustbegtoeqmin'] = 'Debe ser mayor que o igual al mínimo';
$string['mustbeposint'] = 'El máximo de grupos a elegir debe ser mayor o igual a 1. No se permiten letras ni otros signos.';
$string['mygroups_only_label'] = 'Mostrar solamente las entradas orígen que yo califiqué';
$string['myoverview_registrations_missing'] = 'Registros faltantes';
$string['name_scheme_tags'] = '<span class="tag firstname">[firstname]</span>
<span class="tag lastname">[lastname]</span>
<span class="tag idnumber">[idnumber]</span>
<span class="tag username">[username]</span>
<span class="tag alpha">@</span>
<span class="tag number">#</span>';
$string['nameschemenotunique'] = 'Los nombres de grupo de este esquema de nombre no son únicos (<strong>{$a}</strong>). Por  favor elija otro o use # (índice para número) o @ índice alfabético) para crear nombres de grupo únicos.';
$string['namingscheme'] = 'Nombrar esquema';
$string['no_conflictfree_to_display'] = 'No hay grupos-sin-conflicto para mostrar. ¡Por eso, en su lugar trataremos de mostrar a todos!';
$string['no_data_to_display'] = '¡No hay datos de grupo(s) para mostrar!';
$string['no_grades_present'] = 'Sin calificaciones para mostrar';
$string['no_groupmembers_to_display'] = 'No hay miembros de grupo para mostrar. ¡Por eso, en su lugar trataremos de mostrar a todos los grupos!';
$string['no_groups_to_display'] = '¡Sin grupos para mostrar!';
$string['no_queues_to_resolve'] = '¡No hay consultas presentes para resolver!';
$string['no_registrations'] = 'Sin registros';
$string['no_target_selected'] = 'No hay destino para la operación de copia seleccionada. ¡Usted debe seleccionar al menos 1 destino!';
$string['no_users_to_display'] = '¡Sin usuarios para mostrar!';
$string['noaccess'] = '¡Usted no tiene acceso a este módulo (¿posiblemente Usted no pertenece al grupo correcto?)!';
$string['nobody_queued'] = 'Nadie en cola';
$string['nodeletion'] = '¡Está deshabilitada la eliminación de este grupo, debido a que cuando menos una instancia grouptool en este curso está configurada a recrear al grupo en la eliminación!';
$string['nogroupingselected'] = '¡No se han seleccionado agrupamientos!';
$string['nogroups'] = 'Sin grupos en este curso.';
$string['nogroupsactive'] = 'No hay grupos activos en este grouptool.';
$string['nogroupschoose'] = 'Elegir grupos';
$string['nogroupscreate'] = 'Crear grupos';
$string['nogroupsinactive'] = 'No hay grupos inactivos en este grouptool.';
$string['nogrouptools'] = '¡No hay grouptools!';
$string['nonconflicting'] = 'Sin conflictos';
$string['noregistrationdue'] = 'ilimitado';
$string['nosmallgroups'] = 'Evitar grupos pequeños';
$string['nosmallgroups_help'] = '¡ Si se habilita, asegura que cada grupo al menos lleno al 70% de su tamaño! ¡ Si algún (o más precisamente, si el último) grupo sería llenado a menos del 70%, los usuarios de este último grupo se repartirán entre los otros grupos, causándoles que tengan más miembros de los especificados !';
$string['not_allowed_to_show_members'] = '¡Usted no tiene permiso para ver esta información!';
$string['not_graded_by_me'] = 'Calificado por otro usuario';
$string['not_in_queue_or_registered'] = '<strong>{$a->username}</strong> no está ni registrado ni puesto en cola en el grupo <strong>{$a->groupname}</strong>';
$string['not_permitted'] = 'No permitido';
$string['not_registered'] = '¡Usted aun no está registrado!';
$string['not_synced_reg_present'] = 'registros no-sincronizados presentes';
$string['notenoughregs'] = '¡Los usuarios necesitan más registros!';
$string['nothing_to_push'] = '¡Nada para empujar!';
$string['notification:group_recreated'] = 'El grupo <a href="{$a->groupurl}" title="{$a->groupname}">{$a->groupname}</a>  ha sido re-creado debido a que el grouptool <a href="{$a->grouptoolurl}" title="{$a->grouptoolname}">{$a->grouptoolname}</a> está configurado para re-crear grupos eliminados.';
$string['notification:registrations_recreated'] = 'Los miembros del grupo <a href="{$a->groupurl}" title="{$a->groupname}">{$a->groupname}</a> han sido añadidos nuevamente debido a que el grouptool <a href="{$a->grouptoolurl}" title="{$a->grouptoolname}">$a->grouptoolname}</a>  está configurado para recrear grupos eliminados. El grupo mismo fue recreado por otra instancia de grouptool.';
$string['nowhere_queued'] = 'No en cola';
$string['number_of_groups'] = 'Número de grupos N';
$string['number_of_members'] = 'Número de miembros de grupos M';
$string['number_of_students'] = 'Número de estudiantes';
$string['occupied'] = 'Ocupado';
$string['onenewgrouping'] = 'En UN nuevo agrupamiento';
$string['onenewgroupingpergroup'] = 'Un agrupamiento POR grupo';
$string['orientation'] = 'Orientación del PDF';
$string['outdated'] = 'desviando';
$string['overflowwarning'] = '¡Si Usted continúa importando, el tamaño del grupo en la instancia <strong>{$a->instancename}</strong> será excedido!';
$string['overview'] = 'Vista general';
$string['overview_alt'] = 'Vista general sobre grupos y miembros de grupo';
$string['overview_tab'] = 'Vista del grupo';
$string['overview_tab_alt'] = 'Abrir vista de grupo';
$string['overwrite_label'] = 'Sobrescribir calificaciones existentes';
$string['place_allocated_in_group_success'] = 'El grupo <strong>{$a->groupname}</strong> hasido marcado exitosamente para registro';
$string['pluginadministration'] = 'Adminsitración de herramientagrupo';
$string['pluginname'] = 'Herramientagrupo';
$string['portrait'] = 'Retrato';
$string['preview'] = 'Vista previa';
$string['privacy:metadata:agrpid'] = 'Identificador de la representación Moodle del grupo en grouptool.';
$string['privacy:metadata:enrolexplanation'] = 'Grouptool inscribe a usuarios que aun no estaban inscritos en el curso durante la importación para poder añadirlos a los grupos a donde se importarán.';
$string['privacy:metadata:gradesexplanation'] = 'Grouptool puede copiar calificaciones de un usuario a otros miembros del mismo grupo.';
$string['privacy:metadata:groupexplanation'] = 'Grouptool está gestionando miembros de grupos Moodle.';
$string['privacy:metadata:messageexplanation'] = 'Grouptool envía mensajes a usuarios que sean promovidos de la cola de espera a ser registrados.';
$string['privacy:metadata:mod_grouptool_group_filter'] = '¿Por cual grupo filtrar?';
$string['privacy:metadata:mod_grouptool_mygroups_only'] = 'Solamente deberían ser considerados/mostrados grupos propios.';
$string['privacy:metadata:modified_by'] = 'Identificador del usuario si fue modificado por alguien más.';
$string['privacy:metadata:queued'] = 'Contiene todos los usuarios en cola de espera.';
$string['privacy:metadata:registered'] = 'Contiene los usuarios registrados y usuarios marcados para registro.';
$string['privacy:metadata:timestamp'] = 'Hora_y_fecha que el registro fue modificado por última vez.';
$string['privacy:metadata:userid'] = 'Identificador del usurio.';
$string['queue'] = 'Cola';
$string['queue_and_multiple_reg_title'] = 'Colas y registros múltiples';
$string['queue_in_group'] = '¿Proceder con poner en cola a <strong>{$a->username}</strong> en el grupo <strong>{$a->groupname}</strong>?';
$string['queue_in_group_success'] = '¡Se ha puesto en cola exitosamente a  <strong>{$a->username}</strong> en el grupo <strong>{$a->groupname}</strong>!';
$string['queue_you_in_group'] = '¿Proceder con ponerlo a Usted en cola en el grupo <strong>{$a->groupname}</strong>?';
$string['queue_you_in_group_success'] = '¡Exitosamente se puso a Usted en cola en el grupo <strong>{$a->groupname}</strong>!';
$string['queued'] = 'En cola';
$string['queued_in_group_info'] = '<strong>{$a->username}</strong> puesto en cola en el grupo <strong>{$a->groupname}</strong>';
$string['queued_on_rank'] = 'En cola en ranking #{$a}';
$string['queueing_is'] = 'La cola es';
$string['queues'] = 'Colas';
$string['queues_max'] = 'Lugares-en-cola máximos simultáneos por participante';
$string['queuesgrp'] = 'Cola y máximos lugares en cola';
$string['queuesizeerror'] = 'Los lugares en cola deben ser un número mayor o igual a 0. No están permitidas letras ni otros signos.';
$string['queuespresent'] = '¡Las colas ya están presentes! Éstas serán eliminadas si Usted continúa. ¡Para continuar, oprima nuevamente el botón para Guardar!';
$string['queuespresenterror'] = 'Hay usuarios enlistados en colas. Usted no puede desactivar las colas hasta que éstas se hayn resuelto.';
$string['rank'] = 'Ranking';
$string['recreate_group'] = 'Recrear grupo';
$string['reference_grade_feedback'] = 'Calificación-referencia / Retroalimentación';
$string['refresh_table_button'] = 'Refrescar vista previa';
$string['reg_in_full_group'] = '¡El registro de <strong>{$a->username}</strong> en el grupo <strong>{$a->groupname}</strong> no es podible, porque el grupo está lleno!';
$string['reg_not_open'] = 'El egistro no es posible por el momento. Tal vez ya pasó la fecha límite o no estaba permitida en lo absoluto.';
$string['reg_you_in_full_group'] = '¡El registro en el grupo <strong>{$a->groupname}</strong> no es posible porque e grupo está lleno!';
$string['register'] = 'Registrar';
$string['register_in_group'] = '¿Está seguro de querer registrar a <strong>{$a->username}</strong> en el grupo <strong>{$a->groupname}</strong>?';
$string['register_in_group_success'] = '¡Se registró exitosamente a  <strong>{$a->username}</strong> en el grupo <strong>{$a->groupname}</strong>!';
$string['register_you_in_group'] = '¿Está seguro de querer registrarse en el grupo <strong>{$a->groupname}</strong>?';
$string['register_you_in_group_success'] = '¡Usted se registró exitosamente en el grupo <strong>{$a->groupname}</strong>!';
$string['register_you_in_group_successmail'] = '¡Usted se registró exitosamente en el grupo <strong>{$a->groupname}</strong>!';
$string['register_you_in_group_successmailhtml'] = '¡Usted se registró exitosamente en el grupo <strong>{$a->groupname}</strong>!';
$string['registered'] = 'Registrado';
$string['registered_in_group_info'] = '{$a->username} registrado en el grupo <strong>{$a->groupname}</strong>';
$string['registered_on_rank'] = 'Registrado en ranking #{$a}';
$string['registration_missing'] = '1 registro faltante';
$string['registration_period_end'] = 'Fin del registro p ara';
$string['registration_period_start'] = 'Principio del registro para';
$string['registrationdue'] = 'Registro y';
$string['registrationnotification'] = '{$a->course->shortname} -> {$a->modulenameplural} -> {$a->grouptoolname}
----------------------------------------------------------
{$a->message}
----------------------------------------------------------';
$string['registrations'] = 'Registros-de-grupo';
$string['registrations_missing'] = 'Faltan {$a} registros';
$string['regpresent'] = 'Usuarios que ya están {$a}';
$string['rename_failed'] = '¡Falló el renombrado!';
$string['renamed_group'] = '¡Grupo renombrado!';
$string['reset_agrps'] = 'Reiniciar grupos activos';
$string['reset_agrps_help'] = 'Reiniciar todos los grupos de curso para que sean inactivos para grouptools. ¡ Esto también eliminará todos los registros y la cola en grouptools de este curso !';
$string['reset_queues'] = 'Reiniciar colas';
$string['reset_queues_help'] = 'Las colas son eliminadas automáticamente si se reinician los grupos activos.';
$string['reset_registrations'] = 'Reiniciar registros';
$string['reset_registrations_help'] = 'Laos registros son eliminados automáticamente si se reinician los grupos activos.';
$string['reset_transparent_unreg'] = 'Des-registrar a todos los miembros de grupo empujados';
$string['reset_transparent_unreg_help'] = 'Quitar a todos los usuarios de aquellos grupos que estén representados por grupos-herramientagrupo activos';
$string['resize'] = 'Cambiar tamaño';
$string['resized_group'] = '¡Tamaño de grupo cambiado!';
$string['resolve_queue'] = 'Resolver colas';
$string['resolve_queue_legend'] = 'Resolver colas';
$string['resolve_queue_title'] = 'Resolver colas pendientes';
$string['search:activity'] = 'Herramientagrupo - información de actividad';
$string['select'] = 'Seleccionar';
$string['selected'] = 'Seleccionado';
$string['selectfromcohort'] = 'Seleccionar miembros de la cohorte';
$string['selectmultiple'] = 'seleccionar múltiples';
$string['selectsingle'] = 'seleccionar uno solo';
$string['selfregistration'] = 'Registro';
$string['selfregistration_alt'] = 'Registrar a uno omás gruos (dependiendo de las configuraciones)';
$string['setactive'] = 'Activar';
$string['setinactive'] = 'Desactivar';
$string['show_members'] = 'Mostrar miembros del grupo';
$string['showafterdue'] = 'Todos -después de la fecha \'esperado para\'';
$string['showownafterdue'] = 'Propio - después de la fecha ¿esperado para\'';
$string['showownafterreg'] = 'Propio - después del registro';
$string['size'] = 'Tamaño del grupo';
$string['size_grp'] = 'Configuraciones del tamaño del grupo';
$string['size_grp_help'] = 'Si se activa el tamaño del grupo, son limitados los números máximos de miembros para cada grupo (configurado para la instancia completa vía campo de texto). Si adicionalmente se activa "tamaño individual", el tamaño de grupo puede ser definido en la lista siguiente.';
$string['skip_user_import'] = 'Saltar para la importación';
$string['skipped'] = 'Saltado';
$string['sortlist_no_data'] = '¡Actualmente no hay grupos presentes!';
$string['source'] = 'Origen';
$string['source_missing'] = '¡No hay origen a partir del cual copiar!';
$string['sources_missing'] = '¡Hay al menos un grupo sin un orígen elegido desde el cual copiar!';
$string['start'] = 'Inicio';
$string['status'] = 'Estatus';
$string['status_help'] = '<ul>
<li><strong>✔</strong> registrado en grupo-Moodle y  grouptool</li>
<li><strong>?</strong> registrado en grupo-Moodle pero no en  grouptool</li>
<li><strong>+</strong> registrado en grouptool pero no en  grupo-Moodle</li>
<li><strong>1, 2, 3...</strong> en cola de espera en grouptool</li>
</ul>';
$string['successfully_deleted_groups'] = '¡Se eliminaron exitosamente grupos!';
$string['swapped_groups'] = '¡Se catafixiaron los grupos <strong>{$a->a}</strong> (order <strong>{$a->aorder}</strong>) y <strong>{$a->b}</strong> (order <strong>{$a->border}</strong>)!';
$string['switched_to_all_groups'] = '¡Se cambió el filtro de grupo para todos los grupos!';
$string['target'] = 'Objetivo';
$string['too_many_queue_places'] = '¡No se puede poner en cola a  <strong>{$a->username}</strong> en el grupo <strong>{$a->groupname}</strong> porque <strong>{$a->username}</strong>ya está puesto en cola en demasiados grupos!';
$string['too_many_regs'] = '¡El usuario ya está registrado/en-cola en demasiados grupos¡';
$string['toolessregspresent'] = 'Al menos 1 usuario está registrado en un grupo de menos,; por lo tanto, el mínimo de grupos para escoger deberá ser como máximo de {$a}.';
$string['toomanyregs'] = 'Atención: En al menos un grupo hay más miembros del grupo que los especificados en el tamaño de nuevo grupo deseado.<br />Reduzca los miembros del grupo en los grupos antes de cambiar el tamaño del grupo.';
$string['toomanyregspresent'] = 'Al menos 1 usuario está registrado en demasiados grupos,; por lo tanto, el máximo de grupos para escoger deberá ser como mínimo de {$a}.';
$string['total'] = 'Total';
$string['unqueue'] = 'Quitar de la cola';
$string['unqueue_from_group'] = '¿Continuar con la remoción de <strong>{$a->username}</strong> de la cola del grupo <strong>{$a->groupname}</strong>?';
$string['unqueue_from_group_success'] = '¡Se removió exitosamente a <strong>{$a->username}</strong> de la cola del grupo <strong>{$a->groupname}</strong>!';
$string['unqueue_you_from_group'] = '¿Continuar quitándose a Usted mismo de la cola del grupo <strong>{$a->groupname}</strong>?';
$string['unqueue_you_from_group_success'] = '¡Se removió exitosamente Usted mismo de la cola del grupo <strong>{$a->groupname}</strong>!';
$string['unreg'] = 'Desregistrar';
$string['unreg_from_group'] = '¿Continuar el des-registro de <strong>{$a->username}</strong> del grupo <strong>{$a->groupname}</strong>?';
$string['unreg_from_group_success'] = '¡Se des-registró exitosamente a <strong>{$a->username}</strong> del grupo <strong>{$a->groupname}</strong>!';
$string['unreg_is'] = 'Des-registro';
$string['unreg_not_allowed'] = '¡No se permite el des-registro (da-de-baja)!';
$string['unreg_you_from_group'] = '¿Continuar des-registrándo a Usted del grupo <strong>{$a->groupname}</strong>?';
$string['unreg_you_from_group_success'] = '¡Se des-registró a Usted exitosamente del grupo <strong>{$a->groupname}</strong>!';
$string['unregfrommgroups'] = 'Forzar des-registro de grouptool';
$string['unregfrommgroups_help'] = 'Des-registrar usuarios, no solamente de grouptool, sino también del grupo Moodle.';
$string['unregister'] = 'Des-registro';
$string['unregister_conflict_user_not_in_group'] = '¡El usuario <strong>{$a->fullname}</strong> no está en el grupo <strong>{$a->groupname}</strong>!';
$string['unregister_desc'] = 'Des-registrar múltiples usuarios';
$string['unregister_from_inactive_group_warning'] = 'Nota: Grupo <strong>{$a}</strong> actualmente está inactivo dentro del contexto de grouptool y por lo tanto no será mostrado.';
$string['unregister_in_inactive_group_warning'] = 'Nota: Grupo <strong>{$a}</strong> actualmente está inactivo dentro del contexto de grouptool y por lo tanto no será mostrado.';
$string['unregister_progress_completed'] = 'Des-registro completado';
$string['unregister_progress_preview_completed'] = 'Vista previa del des-registro completada';
$string['unregister_progress_start'] = 'Iniciar des-registro';
$string['unregister_progress_unregister'] = 'Des-registrar usuario';
$string['unregister_skipped'] = '¡Se saltó al usuario <strong>{$a->fullname}</strong> para el grupo <strong>{$a->groupname}</strong>!';
$string['unregister_user'] = '¡El des-registro de <strong>{$a->fullname}</strong> (<strong>{$a->idnumber}</strong>) del grupo <strong>{$a->groupname}</strong> fue exitoso.';
$string['unregister_user_not_in_group'] = '¡El usuario <strong>{$a->fullname}</strong> (<strong>{$a->idnumber}</strong>) no está en el grupo <strong>{$a->groupname}</strong>!';
$string['unregister_user_prev'] = 'Des-registrando a <strong>{$a->fullname}</strong> (<strong>{$a->idnumber}</strong>) del grupo <strong>{$a->groupname}</strong>.';
$string['unregisterbutton'] = 'Des-registrar usuarios';
$string['update_grouplist_success'] = 'Se actualizaron exitosamente los grupos activos!';
$string['updatemdlgrps'] = 'Registrar en grupos-Moodle';
$string['uptodate'] = 'actualizado';
$string['use_all_or_chosen'] = 'Usar todo o seleccionado';
$string['use_all_or_chosen_help'] = 'Seleccione "Todos" para crear un agrupamiento para todos los grupos de curso. Use "Seleccionados" para crear agrupamientos solamente para los grupos elegidos.';
$string['use_individual'] = 'Usar tamaño individual por grupo';
$string['use_individual_help'] = 'Anular el tamaño de grupo global con valor individual para cada grupo. Esto se configura mediante la lista de grupo ordenable al fondo.';
$string['use_queue'] = 'Usar colas';
$string['use_queue_help'] = 'Los estudiantes pueden alinearse en lista de espera para los grupos que ya están llenos. Esta configuración olamente puede ser usado si está habilitado el auto-registro y está configurado un límite del tamaño del grupo.';
$string['use_size'] = 'Activar';
$string['user_has_too_less_regs'] = 'El des-registro/quitar de la cola no es posible porque <strong>{$a->username}</strong> está registrado/puesto en cola en demasiado pocos grupos!';
$string['user_is_deleted'] = 'La cuenta de usuario encontrada (ID <strong>{$a->id}</strong>, Nombre <strong>{$a->fullname}</strong>) ya estaba eliminada. Por lo tanto, no es posible la inscripción en este grupo.';
$string['user_move_prev'] = '¡<strong>{$a->user}</strong> será movido de la cola del grupo <strong>{$a->from_group}</strong> al grupo <strong>{$a->to_group}</strong>!';
$string['user_moved'] = '¡<strong>{$a->user}</strong> ha sido movido de la cola del grupo <strong>{$a->from_group}</strong> al grupo <strong>{$a->to_group}</strong>!';
$string['user_not_found'] = '¡El usuario <strong>{$a}</strong> no pudo ser encontrado!';
$string['userlist'] = 'Lista de usuarios';
$string['userlist_alt'] = 'Ver lista de usuarios y sus registros. Exportar datos acerca de usuarios y sus grupos en diferentes formatos (PDF, texto simple, Excel, etc).';
$string['userlist_help'] = 'Lista de ID-numbers separados por uno o más de los siguientes caracteres <ul><li>[,] coma</li><li>[;] punto_y_coma</li><li>[ ] espacio</li><li>[\\n] línea-nueva</li><li>[\\r] retorno-de-carro</li><li>[\\t] tabulador</li></ul>';
$string['userlist_tab'] = 'Vista del curso';
$string['userlist_tab_alt'] = 'Abrir vista del curso';
$string['users_queues_limit'] = 'Lugares de cola por usuario';
$string['users_queues_limit_help'] = 'Limitar los lugares en cola disponibles por usuario si se activa';
$string['users_tab'] = 'Participantes';
$string['users_tab_alt'] = 'Mostrar participantes';
$string['view_registrations'] = 'Ver registros';
$string['viewmoodlegroups'] = 'A grupos Moodle';
$string['with_selection'] = 'Con seleccionados...';
$string['you_are_already_marked'] = '¡Usted ya marcó al grupo <strong>{$a->groupname}</strong> para registro!';
$string['you_are_already_queued'] = '¡Usted ya está puesto en cola en el grupo <strong>{$a->groupname}</strong>!';
$string['you_are_already_registered'] = '¡Usted ya está registrado en el grupo <strong>{$a->groupname}</strong>!';
$string['you_are_not_in_queue_or_registered'] = 'Usted no está ni registrado ni puesto en cola en el grupo <strong>{$a->groupname}</strong>';
$string['you_change_group_to_success'] = '¡Cambio de grupo exitoso! Usted está ahora registrado en el grupo <strong>{$a->groupname}</strong>!';
$string['you_have_too_less_regs'] = '¡El des-registro/ sacarlo-de-la-cola no es posible, porque Usted está registrado/en la cola de muy pocos grupos!';
$string['you_have_too_many_queue_places'] = '¡No se puede poner a Usted en la cola del grupo <strong>{$a->groupname}</strong>  porque Usted ya está puesto en cola en demasiados grupos!';
$string['your_place_allocated_in_group_success'] = 'Usted marcó exitosamente al grupo <strong>{$a->groupname}</strong> para registro';
