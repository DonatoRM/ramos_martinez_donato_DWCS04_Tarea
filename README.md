# ramos_martinez_donato_DWCS04_Tarea

<h1>Tarea UD 4. Desarrollo de aplicaciones web con PHP</h1>
<p>Tienes que programar una aplicación web sencilla que permita gestionar una serie de preferencias del usuario. La aplicación se dividirá en dos páginas:</p>
<ul>
<li><code><strong>preferencias.php.</strong></code>Permitirá al usuario escoger sus preferencias y las almacenará en la sesión del usuario.<br/>Mostrará un cuadro desplegable por cada una de las preferencias. Estas serán:
<ul>
<li><strong>Idioma</strong>. El usuario podrá escoger un idioma entre "inglés" y "español".</li>
<li><strong>Perfil público</strong>. Sus posibles opciones será "sí" y "no".</li>
<li><strong>Zona horaria</strong>. Los valores en este caso estarán limitados a "GMT-2", "GMT-1", "GMT", "GMT+1" y "GMT+2".</li>
</ul><br/>
Además en la parte inferior tendrá un botón con el texto "<strong>Establecer preferencias</strong>" y un enlace que ponga "<strong>Mostrar preferencias</strong>".<br/>
El botón almacenará las preferencias en la sesión del usuario y volverá a cargar esta misma página, en la que se mostrará el texto "<strong>Preferencia de usuario guardadas</strong>". Una vez establecidas esas preferencias, deben estar seleccionadas como valores por defecto en los tres cuadros desplegables.<br/>
El botón "<strong>Establecer preferencias</strong>" llevará a la página "<code>mostrar.php</code>".
</li>
<li>
<code><strong>mostrar.php</strong></code>. Debe mostrar un texto con las preferencias que se encuentran almacenadas en la sesión del usuario. Además, en la parte inferior tendrá un botón con el texto "<strong>Borrar</strong>" y un otro que ponga "<strong>Establecer</strong>".<br/>
El botón borrará las preferencias de la sesión del usuario y volverá a cargar esta misma página, en la que se mostrará el texto "<strong>Preferencias Borradas.</strong>". Una vez borradas esas preferencias, se debe comprobar que sus valores no se muestran en el texto de la página.<br/>
Si pulsamos el botón <strong>Borrar</strong> y no tenemos establecidas la preferencias se nos mostrará el mensaje "<strong>Debes fijar primero las preferencias.</strong>"<br/>
El botón establecer llevará a la página "<code>preferencias.php</code>"<br/>
Se valorará el uso de <strong>Bootstrap</strong> y <strong>Font Awesome</strong> para los estilos
</li>
</ul>
