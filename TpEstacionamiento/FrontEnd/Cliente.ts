namespace Estacionamiento{
		export  class Cliente{
			nombre:string;
			apellido:string;
			marca:string;
			color:string;
			patente:string;
			prioridad:boolean;
		constructor(nombre:string,ape:string,mar:string,col:string,pat:string, prior:boolean){
			
			this.nombre=nombre;
			this.apellido=ape;
			this.marca = mar;
			this.color = col;
			this.patente = pat;
			this.prioridad=prior;
		}
	}
}
 
