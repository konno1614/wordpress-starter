const path = require('path')
const webpack = require('webpack')
const ExtractTextPlugin = require('extract-text-webpack-plugin')
const globImporter = require('node-sass-glob-importer')
const dist = path.resolve(__dirname, '../assets')
const filename = '[name]' //'[name].[hash:8]';

module.exports = {
  devtool: process.env.DEV_TOOL || false,
  context: __dirname,
  entry: {
    common: './entry-common.js',
    hero: './entry-hero.js',
  },
  output: {
    path: dist,
    publicPath: '/wp-content/themes/sample-wordpress/assets/',
    filename: `js/${filename}.js`,
  },
  resolve: {
    extensions: ['.js', '.json', '.scss'],
  },
  externals: {
    jquery: 'jQuery',
  },
  module: {
    rules: [{
        test: /\.js$/,
        exclude: [/node_modules\/(?!(dom7|ssr-window|swiper)\/).*/],
        use: [{
          loader: 'babel-loader',
          options: {
            presets: [
              [
                "@babel/preset-env",
                {
                  targets: require('./browserlist'),
                  useBuiltIns: 'entry',
                }
              ]
            ],
            plugins: [
              "@babel/plugin-syntax-dynamic-import",
            ],
          },
        }, ],
      },
      {
        test: /\.scss$/,
        exclude: path.resolve(__dirname, 'scss/opening.scss'),
        use: ExtractTextPlugin.extract({
          fallback: 'style-loader',
          use: [{
              loader: 'css-loader',
              options: {
                sourceMap: true,
                // url: false,
              },
            },
            {
              loader: 'postcss-loader',
              options: {
                sourceMap: true,
                ident: 'postcss',
                plugins: loader => [
                  require('autoprefixer')({
                    browsers: require('./browserlist'),
                  }),
                ],
              },
            },
            {
              loader: 'sass-loader',
              options: {
                importer: globImporter(),
                outputStyle: 'compressed',
                sourceMap: true,
              },
            },
          ],
        }),
      },
      {
        test: /\.(png|jpg|gif|otf|svg)$/,
        use: [
          {
            loader: 'file-loader',
            options: {
              name: '[path][name].[hash:8].[ext]',
              publicPath: '..'
            }
          }
        ]
      },
    ],
  },
  plugins: [
    new ExtractTextPlugin(`css/${filename}.css`),
  ],
}
