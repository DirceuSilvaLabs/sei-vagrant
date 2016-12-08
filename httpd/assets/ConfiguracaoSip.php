<?

class ConfiguracaoSip extends InfraConfiguracao  {

 	private static $instance = null;

 	public static function getInstance(){
 	  if (ConfiguracaoSip::$instance == null) {
 	    ConfiguracaoSip::$instance = new ConfiguracaoSip();
 	  }
 	  return ConfiguracaoSip::$instance;
 	}

 	public function getArrConfiguracoes(){
 	  return array(
 	      'Sip' => array(
 	          'URL' => 'http://localhost/sip',
 	          'Producao' => false),
 	       
 	      'PaginaSip' => array('NomeSistema' => 'SIP'),

 	      'SessaoSip' => array(
 	          'SiglaOrgaoSistema' => 'ABC',
 	          'SiglaSistema' => 'SIP',
 	          'PaginaLogin' => getenv('SEI_HOST_URL').'/sip/login.php',
 	          'SipWsdl' => 'http://localhost/sip/controlador_ws.php?servico=wsdl',
 	          'https' => false),
 	       
 	      'BancoSip'  => array(
 	          'Servidor' => 'mysql',
 	          'Porta' => '3306',
 	          'Banco' => 'sip',
 	          'Usuario' => 'sip_user',
 	          'Senha' => 'sip_user',
 	          'Tipo' => 'MySql'), //MySql, SqlServer ou Oracle

// 	      'BancoSip'  => array(
// 	          'Servidor' => 'oracle',
// 	          'Porta' => '1521',
// 	          'Banco' => 'sip',
// 	          'Usuario' => 'sip',
// 	          'Senha' => 'sip_user',
// 	          'Tipo' => 'Oracle'), //MySql, SqlServer ou Oracle

// 	      'BancoSip'  => array(
// 	          'Servidor' => 'sqlserver',
// 	          'Porta' => '1433',
// 	          'Banco' => 'sip',
// 	          'Usuario' => 'sip_user',
// 	          'Senha' => 'sip_user',
// 	          'Tipo' => 'SqlServer'), //MySql, SqlServer ou Oracle

				'CacheSip' => array('Servidor' => 'memcached',
						                'Porta' => '11211'),

 	      'HostWebService' => array(
 	          'Replicacao' => array('*'), //endere�o ou IP da m�quina que implementa o servi�o de replica��o de usu�rios
 	          'Pesquisa' => array('*'), //endere�os/IPs das m�quinas do SEI
 	          'Autenticacao' => array('*')), //endere�os/IPs das m�quinas do SEI

				'InfraMail' => array(
						'Tipo' => '2', //1 = sendmail (neste caso n�o � necess�rio configurar os atributos abaixo), 2 = SMTP
						'Servidor' => 'smtp',
						'Porta' => '1025',
						'Codificacao' => '8bit', //8bit, 7bit, binary, base64, quoted-printable
						'MaxDestinatarios' => 999, //numero maximo de destinatarios por mensagem
						'MaxTamAnexosMb' => 999, //tamanho maximo dos anexos em Mb por mensagem
						'Seguranca' => 'TLS', //TLS, SSL ou vazio
						'Autenticar' => false, //se true ent�o informar Usuario e Senha
						'Usuario' => '',
						'Senha' => '',
						'Protegido' => 'desenv@instituicao.gov.br' //campo usado em desenvolvimento, se tiver um email preenchido entao todos os emails enviados terao o destinatario ignorado e substitu�do por este valor (evita envio incorreto de email)
				)
 	  );
 	}
}

