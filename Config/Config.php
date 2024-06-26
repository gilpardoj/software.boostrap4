<?php 
	const BASE_URL = "http://localhost/ecommerce";
	//const BASE_URL = "https://glamoursecretsdjr.com";

	//Zona horaria
	date_default_timezone_set('America/Lima');

	//Datos de conexión a Base de Datos AWS
	//const DB_HOST = "database-project-djr.c3y884k4i9t5.us-east-1.rds.amazonaws.com";

	const DB_HOST = "localhost";
	const DB_NAME = "db_djr";
	const DB_USER = "root";
	//Conexion Hosting SSD
	//const DB_NAME = "glamours_djr";
	//const DB_USER = "glamours_jech";
	//const DB_PASSWORD = "Jorgekpop16@";
	
	const DB_PASSWORD = "";
	//const DB_PASSWORD = "database-project-djr";
	const DB_CHARSET = "utf8";

	//Para envío de correo
	const ENVIRONMENT = 1; // Local: 0, Produccón: 1;

	//Deliminadores decimal y millar Ej. 24,1989.00
	const SPD = ".";
	const SPM = ",";

	//Simbolo de moneda
	const SMONEY = "S/";
	const CURRENCY = "PEN";

	//Api PayPal
	//SANDBOX PAYPAL
	const URLPAYPAL = "https://api-m.sandbox.paypal.com";
	const IDCLIENTE = "";
	const SECRET = "";
	//LIVE PAYPAL
	//const URLPAYPAL = "https://api-m.paypal.com";
	//const IDCLIENTE = "";
	//const SECRET = "";

	//Datos envio de correo
	const NOMBRE_REMITENTE = "Tienda Virtual";
	const EMAIL_REMITENTE = "GlamourSecretsDJR@undc.edu.pe";
	const NOMBRE_EMPESA = "Glamour Secrets DJR";
	const WEB_EMPRESA = "www.glamoursecretsdjr.com";
	const DESCRIPCION = "Una tienda especializada en moda intima de mujer";
	const SHAREDHASH = "TiendaVirtual";

	//Datos Empresa
	const DIRECCION = "San Vicente, Cañete";
	const TELEMPRESA = "+(51) 975133771";
	const WHATSAPP = "975133771";
	const EMAIL_EMPRESA = "GlamourSecretsDJR@undc.edu.pe";
	const EMAIL_PEDIDOS = "potrillo451@gmail.com"; 
	const EMAIL_SUSCRIPCION = "newsDJR@undc.edu.pe";
	const EMAIL_CONTACTO = "infoDJR@undc.edu.pe";

	const CAT_SLIDER = "1,2,3,4,5";
	const CAT_BANNER = "6,7,8";
	const CAT_FOOTER = "1,2,3,4,5";

	//Datos para Encriptar / Desencriptar
	const KEY = 'tecomsis';
	const METHODENCRIPT = "AES-128-ECB";

	//Envío
	const COSTOENVIO = 5;

	//Módulos
	const MDASHBOARD = 1;
	const MUSUARIOS = 2;
	const MCLIENTES = 3;
	const MPRODUCTOS = 4;
	const MPEDIDOS = 5;
	const MCATEGORIAS = 6;
	const MSUSCRIPTORES = 7;
	const MDCONTACTOS = 8;
	const MDPAGINAS = 9;

	//Páginas
	const PINICIO = 1;
	const PTIENDA = 2;
	const PCARRITO = 3;
	const PNOSOTROS = 4;
	const PCONTACTO = 5;
	const PPREGUNTAS = 6;
	const PTERMINOS = 7;
	const PSUCURSALES = 8;
	const PERROR = 9;

	//Roles
	const RADMINISTRADOR = 1;
	const RSUPERVISOR = 2;
	const RCLIENTES = 3;

	const STATUS = array('Completo','Aprobado','Cancelado','Reembolsado','Pendiente','Entregado');

	//Productos por página
	const CANTPORDHOME = 8;
	const PROPORPAGINA = 4;
	const PROCATEGORIA = 4;
	const PROBUSCAR = 4;

	//REDES SOCIALES
	const FACEBOOK = "https://www.facebook.com/Analizajech";
	const INSTAGRAM = "https://www.instagram.com/analizajech/";
	

 ?>