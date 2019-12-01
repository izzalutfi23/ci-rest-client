<?php 

	use GuzzleHttp\Client;


	class Model extends CI_Model{
		public function get_mhs(){
			$client = new Client();
			$response = $client->request('GET', 'http://localhost/ci-rest-server/api/mahasiswa', [
				'auth'=>['admin', '1234'],
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
				'tgl_lahir'=>$data['tgl_lahir']
			);
			$this->db->insert('mahasiswa', $param);
		}

		public function pedit($data){
			$param = array(
				'nim'=>$data['nim'],
				'nama'=>$data['nama'],
				'alamat'=>$data['alamat'],
				'tgl_lahir'=>$data['tgl_lahir']
			);
			$this->db->update('mahasiswa', $param, ['nim'=>$data['nim']]);
		}

		public function pdelete($nim){
			$this->db->where('nim', $nim);
			$this->db->delete('mahasiswa');
		}
	}
 ?>