// 路由
//安装koa-router文件
const router = require('koa-simple-router');  
const IndexController = require('./IndexController');
const indexController = new IndexController();
const TestController = require('./TestController');
const testController = new TestController();
// 路由集中处理
module.exports = (app) => {
 app.use(router(_ => {
    _.get('/', indexController.actionIndex());
    _.get('/test', testController.actionIndex());
    _.get('/add', indexController.actionAdd());
  }));
}