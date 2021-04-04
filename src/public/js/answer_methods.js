function scoreModify(answerID, route) {
    let xmlHttpRequest = new XMLHttpRequest()
    xmlHttpRequest.onreadystatechange = function (){
        if (this.readyState === 4 && this.status === 200){
            document.getElementById(`${answerID}_score`).innerHTML = this.responseText
        }else{
            console.log(this.status, this.statusText)
        }
    }
    xmlHttpRequest.open('POST', route, true)
    xmlHttpRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlHttpRequest.send(`_token=${csrf}`)
}

function copyToClipboard(string){
    const el = document.createElement('textarea');
    el.value = string;
    document.body.appendChild(el);
    el.select();
    document.execCommand('copy');
    document.body.removeChild(el);
}
