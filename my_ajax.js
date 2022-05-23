document.getElementById('Post_Form').onclick = function(e){ 
    getansw();
}

function getansw(){
    
    var HttpReq = new XMLHttpRequest();
    var inp_a = document.getElementById('InputX').value;
    var inp_b = document.getElementById('InputY').value;
    var inp_c = document.getElementById('InputZ').value;
    
    HttpReq.open("GET","request.php?inp_a=" + inp_a +"&inp_b=" + inp_b + "&inp_c=" + inp_c);
    
    answer = "";

    HttpReq.onload = function(){
        res = HttpReq.responseText;
        console.log(res);

        if(res != undefined && res != ""){
            res = JSON.parse(res);
            displayAnswer(res);
        }else{       
            arr_ans = quadraticEquation(inp_a,inp_b,inp_c); 
            
            console.log(arr_ans);
            
            displayAnswer(arr_ans);

            if(arr_ans["answer"] > 0){
                arr_ans['inp_a'] = inp_a;
                arr_ans['inp_b'] = inp_b;
                arr_ans['inp_c'] = inp_c;
                sendAnswerToServer(arr_ans);
            }else{
                alert("Дискриминант меньше нуля!");
            }
        }
    }

    HttpReq.send();
}

function sendAnswerToServer(arr_ans){
    var HttpReq = new XMLHttpRequest();

    HttpReq.open("POST","request.php")
    HttpReq.setRequestHeader('Content-type', 'application/json; charset=utf-8');
    HttpReq.send(JSON.stringify(arr_ans));
}

function displayAnswer(arr_ans){
    console.log(arr_ans);
    document.getElementById('ans').value = arr_ans["answer"];
    document.getElementById('x1').value = arr_ans["ans_x1"];
    document.getElementById('x2').value = arr_ans["ans_x2"];
}

let quadraticEquation = (a, b, c) => {
    let res = {};
    
    if(a == 0){
        res['answer'] = 0;
        res['ans_x1'] = 0;
        res['ans_x2'] = 0;
        return res;
    }
    
    let D = b * b - 4 * a * c;
    console.log('D = ' + D);
    
    if(D < 0){
        res['answer'] = 0;
        res['ans_x1'] = 0;
        res['ans_x2'] = 0;
        return res;
    }

    res['answer'] = D;
    if(D == 0){
        res["ans_x1"] = (-b + Math.sqrt(D)) / (2 * a);
        res["ans_x2"] = (-b + Math.sqrt(D)) / (2 * a);
    }
    else if(D > 0){
        let tmp = [];
        res["ans_x1"] = (-b + Math.sqrt(D)) / (2 * a);
        res["ans_x2"] = (-b - Math.sqrt(D)) / (2 * a);
    }
    return res;
}