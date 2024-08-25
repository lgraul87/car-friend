const path = require('path');

module.exports = {
  entry: './assets/js/main.js', // Ajusta según la ubicación de tu archivo JS principal
  output: {
    filename: 'bundle.js', // Nombre del archivo generado
    path: path.resolve(__dirname, 'assets/dist') // Directorio de salida
  },
  mode: 'production', // Cambia a 'development' si estás en modo de desarrollo
  module: {
    rules: [
      {
        test: /\.js$/, // Para archivos JS
        exclude: /node_modules/,
        use: {
          loader: 'babel-loader',
          options: {
            presets: ['@babel/preset-env']
          }
        }
      },
      {
        test: /\.scss$/, // Para archivos SCSS
        use: [
          'style-loader',
          'css-loader',
          'sass-loader'
        ]
      }
    ]
  },
  resolve: {
    extensions: ['.js', '.jsx', '.scss']
  }
};
