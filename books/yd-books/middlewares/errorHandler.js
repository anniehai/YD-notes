const errorHandler = {
    error(app,logger) {
        // app.use(async (ctx, next) => {
        //     try {
        //         await next(); 
        //     } catch (error) {
        //         logger.error(error);
        //         ctx.status = 500;
        //         ctx.body = '404';
        //     }
        // })
        app.use(async (ctx, next) => {
            await next();
            if (404!== ctx.status) {
                return;
            }  
            logger.error(error);
            ctx.status = 200;
            ctx.body = '404';
        })
    }
}
module.exports = errorHandler