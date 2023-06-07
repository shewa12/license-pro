const path = require("path");

module.exports = {
   entry: {
      backend: "./src/index.js",
    },
   output: {
      path: path.resolve(__dirname, "assets/js"),
      filename: "[name]-bundle.js"
   },
   devtool: "source-map", // Add this line to enable source maps
   module: {
    rules: [
       {
          test: /\.(js|jsx)$/,
          exclude: /node_modules/,
          use: {
             loader: "babel-loader"
          }
       },
       {
          test: /\.s?css$/,
          use: ["style-loader", "css-loader", "sass-loader"]
       },
       {
          test: /\.(png|jpe?g|gif)$/i,
          use: [
             {
                loader: "file-loader",
             },
          ],
       },
    ]
 }
 
};
