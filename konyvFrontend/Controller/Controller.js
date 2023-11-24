import DataService from "../Model/DataService.js";
import TablaView from "../View/TablaView.js"

export default class Conntroller{
    constructor(){
        this.dataService = new DataService()
        //console.log("valami")
        this.dataService.getAxiosData("/api/konyvek",this.megjelenit)
        $(window).on("sorTorles",(e)=>{
            console.log(e)
            this.dataService.deleteAxiosData("/api/konyvek",e.detail)
        })
    }
    megjelenit(list){
       // console.log(list)
        //példányosítjuk a TáblaViewt
        new TablaView(list, $(".tabla")) 
        

    }
}