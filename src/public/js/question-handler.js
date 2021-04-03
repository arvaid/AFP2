function loadTopics(topicIndex){
    let xmlHttpRequest = new XMLHttpRequest()
    xmlHttpRequest.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
            document.getElementById("topicList").innerHTML = this.responseText
        }
    };
    xmlHttpRequest.open("GET", topicIndex, true)
    xmlHttpRequest.send()
}

function loadQuestionsFor(topicShow){
    let xmlHttpRequest = new XMLHttpRequest()
    xmlHttpRequest.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
            document.getElementById("questionList").innerHTML = this.responseText
        }
    };
    xmlHttpRequest.open("GET", `${topicShow}`, true)
    xmlHttpRequest.send()
}
