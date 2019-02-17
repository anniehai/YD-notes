const fetch = require("node-fetch");
const config = require("../config");
class SafeRequest{
    constructor(url){
        this.url = url;
        this.baseURL = config.baseURL
    }
    fetch(options){
        let ydfetch = fetch(config.baseURL+'books/index');
        return new Promise((resolve,reject)=> {
            let result = {
                code: 0,
                msg: "",
                data:[]
            };
            ydfetch
            .then(res=>res.json())
            .then((json)=> {
                result.data = json;
                resolve(result)
            }).catch((error)=> {
                result.code = 1,
                result.msg = '跟后端通信失败',
                reject(result)
            })
        })
    }
}
module.exports = SafeRequest;