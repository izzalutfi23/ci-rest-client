<?php 

	use GuzzleHttp\Client;

	class Model extends CI_Model{

		private $_client;

		public function __construct(){
			$this->_client = new Client([
				'base_uri' => 'http://localhost/ci-restserver/api/',
				'auth' => ['admin', '1234']
			]);
		}

		public function get_mhs(){
			$response = $this->_client->request('GET', 'mahasiswa', [
				'query'=>[
					'KEY'=>'izza123'
				]
			]);

			$result = json_decode($response->getBody()->getContents(), true);
			return $result['data'];
		}

		public function pinput($data){
			$param = array(
				'nim'=>$data['nim'],
				'nama'=>$data['nama'],
				'alamat'=>$data['alamat'],
				'tgl_lahir'=>$data['tgl_lahir'],
				'KEY'=>'izza123'
			);
			
			$response = $this->_client->request('POST', 'mahasiswa', [
				'form_params' => $param
			]);
			$result = json_decode($response->getBody()->getContents(), true);
			return $result;
		}

		public function pedit($data){
			$param = array(
				'nim'=>$data['nim'],
				'nama'=>$data['nama'],
				'alamat'=>$data['alamat'],
				'tgl_lahir'=>$data['tgl_lahir'],
				'KEY'=>'izza123'
			);
			
			$response = $this->_client->request('PUT', 'mahasiswa', [
				'form_params' => $param
			]);
			$result = json_decode($response->getBody()->getContents(), true);
			return $result;	
		}

		public function pdelete($nim){
			$response = $this->_client->request('DELETE', 'mahasiswa', [
				'form_params' => [
					'id' => $nim,
					'KEY' => 'izza123'
				]
			]);

			$result = json_decode($response->getBody()->getContents(), true);
			return $result;
		}
	}
 ?>