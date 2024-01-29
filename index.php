<html>
	<head></head>
    <body>
		<script>
			<?php
			if((count($_POST) == 3) and (count($_GET) == 0) and array_key_exists("c", $_POST) == "c" and array_key_exists("h", $_POST) == "c" and array_key_exists("b", $_POST) == "b") {
                if((strlen($_POST['h']) >= 1) and (strlen($_POST['b']) >= 1)) {
                    				echo "const token = \"token github_pat_토큰id\";
function a() {
    var p = new Date(new Date().getTime() + (new Date().getTimezoneOffset() * 60 * 1000) + 32400000)
    var y = p.getFullYear();
    var m = ('0' + (p.getMonth() + 1)).slice(-2);
    var d = ('0' + p.getDate()).slice(-2);
    var h = ('0' + p.getHours()).slice(-2);
    var m0 = ('0' + p.getMinutes()).slice(-2);
    return y + m + d + h + m0;
}
const t = `,{
    \"n\": 0,
    \"h\": \"".$_POST['h']."\",
    \"b\": \"".$_POST['b']."\",
    \"i\": \"\",
    \"d\": \"`+a()+`\",
    \"c\": \"".$_POST['c']."\"
  }`;
const b = t + `
]`;
function decodeUnicode(str) {
    return decodeURIComponent(atob(str).split('').map(function (c) {
        return '%' + ('00' + c.charCodeAt(0).toString(16)).slice(-2);
    }).join(''));
}
fetch(\"https://api.github.com/repos/1top10000/dx/contents/dx.txt\", {
    method: \"GET\",
    headers: {
        Authorization: token
    }
}).then(response => response.json()).then(res => callback(res))
function callback(res) {
    fetch(\"https://api.github.com/repos/1top10000/dx/contents/dx.txt\", {
        method: \"PUT\",
        headers: {
            \"Content-Type\": \"application/json\",
            Authorization: token
        },
        body: JSON.stringify({
            owner: '1top10000',
            repo: 'dx',
            path: 'dx/db.json',
            message: 'my commit message',
            content: window.btoa(unescape(encodeURIComponent(decodeUnicode(res.content).slice(0, decodeUnicode(res.content).length - 2) + b))),
            sha: res.sha,
            committer: {
                name: '1top10000',
                email: 'sexesoso.t.tn12345@gmail.com'
            }
        })
    }).then(() => {
		location.href='https://paraxeni-zoi.p-e.kr/dxcommunity';
        document.querySelector('script').remove();
    });
}";
                } else {
                    echo "document.write('1글자 이상 입력해주세요');";
					echo "const wakeUpTime = Date.now() + 2600;";
                    echo "while (Date.now() < wakeUpTime) {}";
					echo "location.href='https://paraxeni-zoi.p-e.kr/dxcommunity';";
					echo "document.querySelector('script').remove();";
                }
			}else{
				echo "document.write('<h2>이상한생활 DX&7777커뮤니티 글 업로드 PHP서버</h2>');";
				echo "document.querySelector('script').remove();";
			}
			?>
		</script>
    </body>
</html>
