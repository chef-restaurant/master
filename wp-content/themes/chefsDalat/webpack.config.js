const webpack = require('webpack');
const path = require('path');
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
module.exports = {
    module: {
        rules: [
        {
            test: /\.js$/,
            include: [path.resolve(__dirname, 'src')],
            exclude: /node_modules/,
            loader: 'babel-loader',
        },
        {
            test: /\.(scss|css)$/,
            use: [
                MiniCssExtractPlugin.loader,
                {
                    loader: 'css-loader',
                    options: {
                        sourceMap: true
                    }
                },
                {
                    loader: 'sass-loader',
                    options: {
                        sourceMap: true,
                    }
                }
            ]
        },
        {
            test: /\.(png|jpg|gif|svg)$/,
            exclude: [/fonts/],
            use: [{
                loader: 'file-loader',
                options: {
                    name: '[name].[ext]?[hash]',
                    outputPath: "images",
                    publicPath: "images"
                },
            }],

        }, 
        { 
            test: /\.(eot|ttf|woff|woff2|otf)$/, 
            use: [
                {
                  loader: 'file-loader',
                  options: {
                    name: '[name].[ext]',
                    outputPath: 'fonts/'
                  }
                }
              ]
        }
        ]
    },
    resolve: {
        alias: {
            'jquery.validation': 'jquery-validation/dist/jquery.validate.js',
            './fonts' : path.resolve(__dirname, "./src/fonts/")
        },
    },
    entry: {
        theme: './src/css/app.scss',
        vendor: './src/css/vendors.scss',
        app: './src/js/app.js'
    },
    output: {
        filename: '[name].js',
    },
    plugins: [
        new MiniCssExtractPlugin({
            filename: '[name].css',
            chunkFilename: '[id].min.css'
        }),
        new webpack.ProvidePlugin({
            $: 'jquery',
            jQuery: 'jquery',
            'window.jQuery': 'jquery'
        })
    ],
    mode: 'development',
    watch: true
};
