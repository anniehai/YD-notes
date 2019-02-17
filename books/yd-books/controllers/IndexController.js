const Index = require("../models/Index");
class IndexController{
  constructor(){};
  actionIndex () {
    return async(ctx, next) => {
        // ctx.body = await ctx.render("index");
        const index = new Index();
        const result = await index.getDate();
        console.log(result)
        // ssr
        ctx.body = await ctx.render("index",{
          data: result.data
        })
    }
  };
  actionAdd () {
    return async(ctx, next) => {
        ctx.body = await ctx.render("add");
    }
  };
}
module.exports = IndexController;