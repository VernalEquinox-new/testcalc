
var webpack = require('webpack');
const MiniCssExtractPlugin = require("mini-css-extract-plugin");

const path = require('path');

module.exports = {
  plugins: [
    new webpack.ProvidePlugin({
      $: 'jquery',
      jQuery: 'jquery',
    }),
    new MiniCssExtractPlugin({
        filename: `components/[name].css`
    }),
  ],
  resolve : {
    alias: {
      // bind version of jquery-ui
      'datepicker': 'jquery-ui/ui/widgets/datepicker',
      // bind to modules;
      modules: path.join(__dirname, "node_modules"),
    },
  },
  mode: 'development',
  entry: ["./app/main.js"],
  output: {
    path: path.resolve(__dirname, 'dist'),
    filename: "bundle.js"
  },
  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /(node_modules)/,
        loader: 'babel-loader',

      },
      {
        test: /\.css$/,
        use: [ 'style-loader', 'css-loader' ]
      },
      {
        test: /\.(woff|woff2|eot|ttf|otf|)$/,
        loader: 'file-loader?name=fonts/[name].[ext]'
      },
      {
        test: /\.(jpe?g|png|gif)$/,
        loader: 'file-loader?name=dist/components/images/[name].[ext]'
      }
    ]
  }
}
