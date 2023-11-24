export default class SorView{
    #obj={}
    constructor(index, obj, szuloElem){
        this.index=index
        this.#obj=obj
        this.szuloElem=szuloElem
        //console.log(this.#obj)
        this.htmlOsszerak()
        this.torolGomb =this.szuloElem.find(".torol:last")
        console.log(this.torolGomb)
        this.torolGomb.on("click",()=>{
            this.trigger("sorTorles")
        })
    }
    trigger(e){
        const esemenyem=new CustomEvent(e,{detail:this.id})
        console.log("trigger")
        window.dispatchEvent(esemenyem)
      }
    
    htmlOsszerak(){
        let txt="<tr>"
        for (const key in this.#obj) {
           txt+=`<td>${this.#obj[key]}</td>`
           
        }   
        txt+=`<td><span class="torol">❌</span></td>`   
        
        txt+="</tr>"
        this.szuloElem.append(txt)
        //console.log(txt)
    }
}