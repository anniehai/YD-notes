// Csr
console.log('这是加载的js文件');
fetch("/test").then((res)=> {
    return res.json()
}).then((res)=> {
    console.log(res)
    console.log("后台数据！")
    // document.getElementById("csr").innerHTML = res.data;
})