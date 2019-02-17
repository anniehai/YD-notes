const Koa = require("koa");
const app = new Koa();
const path = require("path");
const co = require("co");
const serve = require("koa-static");
const render = require("koa-swig");
const errorHandler = require("./middlewares/errorHandler");
const log4js = require('log4js');
const config = require('./config');
// process.env.NOODE_ENV
app.use(serve(config.staticDir));
// app.use(serve(__dirname + '/assets'));
// 注入我们的路由机制
// koa-swig
// ssr
app.context.render = co.wrap(render({
    root: path.join(config.viewDir),
    // root: path.join(__dirname, 'views'),
    autoescape: true,
    cache: 'memory',
    ext: 'html',
    varControls: ["[[","]]"], // swig模板跟vue模板冲突，定义swig模板
    writeBody: false
  }));
// log
log4js.configure({
appenders: { cheese: { type: 'file', filename: __dirname + 'logs/yd.log' } },
categories: { default: { appenders: ['cheese'], level: 'error' } }
});
const logger = log4js.getLogger('cheese');
  // error
errorHandler.error(app,logger);
// 引入路由
require('./controllers')(app);

app.listen(config.port, () => {
    console.log('启动完毕！');
})