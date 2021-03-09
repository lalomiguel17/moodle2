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
 * Strings for component 'debug', language 'es_mx', version '3.10'.
 *
 * @package     debug
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['authpluginnotfound'] = 'No se ha encontrado el plugin de autenticación {$a}.';
$string['blocknotexist'] = 'El bloque {$a} no existe';
$string['cannotbenull'] = '¡ {$a} no puede ser null !';
$string['cannotdowngrade'] = 'No se puede degradar {$a->plugin} de {$a->oldversion} a {$a->newversion}.';
$string['cannotfindadmin'] = '¡ No se ha podido encontrar un usuario administrador !';
$string['cannotinitpage'] = 'No se puede inicializar completamente la página: ID {$a->id} no válido {$a->name}';
$string['cannotsetuptable'] = 'Las tablas {$a} no han podido configurarse con éxito.';
$string['codingerror'] = 'Detectado un error de codificación, debe ser corregido por un programador: {$a}';
$string['configmoodle'] = 'Moodle aún no ha sido configurado. Necesita editar config.php.';
$string['debuginfo'] = 'Información de depuración';
$string['erroroccur'] = 'Ocurrió un error durante este proceso';
$string['invalidarraysize'] = 'Tamaño incorrecto de matrices en params de: {$a}';
$string['invalideventdata'] = 'Se enviaron datos del evento incorrectos: {$a}';
$string['invalidparameter'] = 'Valor de parámetro inválido detectado';
$string['invalidresponse'] = 'Detectado valor de respuesta no válido';
$string['line'] = 'Línea';
$string['missingconfigversion'] = 'La tabla de configuración (config table) no contiene la versión. Usted no puede continuar.';
$string['modulenotexist'] = 'El módulo {$a} no existe';
$string['morethanonerecordinfetch'] = 'Se ha encontrado más de un registro en fetch().';
$string['mustbeoveride'] = 'El método abstracto {$a} debe ser anulado.';
$string['noadminrole'] = 'No se ha encontrado rol de administrador';
$string['noblocks'] = 'No hay bloques instalados.';
$string['nocate'] = 'No hay categorías.';
$string['nomodules'] = 'No se han encontrado módulos.';
$string['nopageclass'] = 'Se importó {$a} pero no encontró clases página';
$string['noreports'] = 'No hay reportes accesibles';
$string['notables'] = 'No hay tablas';
$string['outputbuffer'] = 'Buffer de salida';
$string['phpvaroff'] = 'La variable PHP \'{$a->name}\' del servidor debería estar desconectada (Off) - {$a->link}';
$string['phpvaron'] = 'La variable PHP \'{$a->name}\' del servidor dno está conectada (On) - {$a->link}';
$string['sessionmissing'] = 'El objeto {$a} está ausente de la sesión';
$string['sqlrelyonobsoletetable'] = 'Este SQL depende de tabla(s) obsoleta(s): {$a}! Su código debe ser arreglado por un programador.';
$string['stacktrace'] = 'Trazado de la pila (stack)';
$string['withoutversion'] = 'El archivo principal de version.php está ausente, no legible o roto.';
$string['xmlizeunavailable'] = 'Las funciones xmlize no están disponibles';
