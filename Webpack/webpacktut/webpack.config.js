const HtmlWebPackPlugin = require("html-webpack-plugin");

module.exports = {
    module: {
        rules: [
            { // use babel loader for all non-node module JS files
                test: /\.js$/,
                exclude: /node_modules/,
                use: {
                    loader: "babel-loader"
                }
            },
            { // use html loader for all html files and minimize the files.
                test: /\.html$/,
                use: [
                    {
                        loader: "html-loader",
                        options: { minimize: true}
                    }
                ]
            },
        ]
    },
    plugins: [
        new HtmlWebPackPlugin({
            template: "./src/index.html",
            filename: "./index.html"
        }),
    ]
}