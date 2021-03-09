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
 * Strings for component 'customcertelement_daterange', language 'es_mx', version '3.10'.
 *
 * @package     customcertelement_daterange
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addrange'] = 'Añadir otro rango';
$string['completiondate'] = 'Fecha de terminación';
$string['courseenddate'] = 'Fecha de fin del curso';
$string['coursegradedate'] = 'Fecha de calificación del curso';
$string['coursestartdate'] = 'Fecha de inicio del curso';
$string['currentdate'] = 'Fecha actual';
$string['dateitem'] = 'Ítem de fecha';
$string['dateitem_help'] = 'Esto será la fecha que es impresa en el certificado';
$string['dateranges'] = 'Rangos de fechas';
$string['datestring'] = 'Cadena de caracteres';
$string['end'] = 'Fin';
$string['error:atleastone'] = 'Usted debe tener al menos un rango de fecha configurado';
$string['error:datestring'] = 'Usted debe proporcionar una representación en cadena de caracteres para el rango_de_fecha';
$string['error:enddate'] = 'La Fecha de fin ocurre después de la Fecha de inicio';
$string['error:recurring'] = 'El rango recurrente debe ser no mayor de 12 meses';
$string['fallbackstring'] = 'Cadena de caracteres para plan B';
$string['fallbackstring_help'] = 'Esta cadena de caracteres será mostrada si no se aplica un rango de fecha a una fecha. Si la cadena de caracteres para el plan B no está configurada, no habrá ninguna salida en absoluto.';
$string['help'] = 'Configurar una representación de cadena de caracteres que represente a sus rangos de fechas.<br /><br />Si sus rangos se traslapan el primer rango de fechas que coincidan será aplicado.';
$string['issueddate'] = 'Fecha emitido';
$string['placeholders'] = 'Los reemplazables siguientes pueden ser usados en la cadena de caracteres que representa una cadena para plan B. <br/><br /> {{range_first_year}} - primer año del rango que coincide,<br/> {{range_last_year}} - último año del rango que coincide,<br/> {{recurring_range_first_year}} - primer año del período recurrente que coincide,<br/> {{recurring_range_last_year}} - último año del período recurrente que coincide,<br/> {{current_year}} - al año actual,<br/>  {{date_year}} - un año de la fecha del usuario.';
$string['pluginname'] = 'Rango de fecha';
$string['preview'] = 'Previsualizar {$a}';
$string['privacy:metadata'] = 'El plugin de Rango de fecha no almacena ningún dato personal.';
$string['recurring'] = 'Recurrente';
$string['recurring_help'] = 'Si Usted marca un rango de fechas como recurrente entonces el año configurado no será considerado.';
$string['setdeleted'] = 'Eliminar';
$string['start'] = 'Inicio';
