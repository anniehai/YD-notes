class TestController{
    constructor(){};
    actionIndex () {
      return async(ctx, next) => {
          ctx.body = {
              data: '测试'
          }
      }
    };
  }
  module.exports = TestController;