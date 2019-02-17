/**
 *  @fileoverview 实现index的数据模型
 *  @author haixia
 */
const SafeRequest = require("../utils/SafeRequest");
/**
 * Index类 获取相关后台关于图书的数据类
 * @class
 */
class Index{
    /**
     * @constructor
     * @param{string} app koa执行山下文
     */
    constructor (app){}
    /**
     * @param{*}options 配置项
     * @example
     * return new Promise
     * getDate(options)
     */
    getDate (options){
        const safeRequest = new SafeRequest("book/index");
        return safeRequest.fetch()
    }
}
module.exports = Index;