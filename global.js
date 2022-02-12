baseUrl = window.location.origin;

function initku() {
          
}

function dataku() {
  return {
          senin: ['MATEMATIKA', 'IPA'],
          selasa: ['IPS', 'PPKN'],
          rabu: ['PAI', 'SENI BUDAYA'],
          kamis: ['KOMPUTER', 'FISIKA'],
          jumat: ['SEJARAH','BAHASA INDONESIA'],
          sabtu: ['BAHASA SUNDA', 'BAHASA INGGRIS'],
          addData(e, hari, data){
            e.preventDefault();
             this[hari].push(data)
          },
          deleteData(e, hari,idx){
            e.preventDefault();
             if(this[hari].length > 0){
               this[hari].splice(idx,1)
             }
          }
  }
}