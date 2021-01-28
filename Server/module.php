<?php
	class BHKW extends IPSModule {

		public function Create()
		{
			//Never delete this line!
			parent::Create();
			
		}

		public function Destroy()
		{
			//Never delete this line!
			parent::Destroy();
		}

		public function ApplyChanges()
		{
			//Never delete this line!
			parent::ApplyChanges();
		}



	
		private function GetVarID($Ident)
		{
					
			$StatusID = $this->GetIDForIdent("KirschStatus");
			IPS_LogMessage("BHKW statePP StatusID", $StatusID);
			
			rIdent("Drosselklapenstellung")  , $ScriptData['V2']);
			
		}
	}