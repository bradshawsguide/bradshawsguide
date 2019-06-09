const commonjs = require('rollup-plugin-commonjs');
const resolve = require('rollup-plugin-node-resolve');
const {terser} = require('rollup-plugin-terser');

const plugins = [
  resolve(),
  commonjs(),
  terser()
];

export default [{
  input: 'src/patterns/assets/scripts/app.js',
  output: {
    file: 'www/assets/app.js',
    format: 'iife',
    name: 'app',
    sourcemap: true
  },
  plugins
}, {
  input: 'src/patterns/assets/scripts/map.js',
  output: {
    file: 'www/assets/map.js',
    format: 'iife',
    name: 'map',
    sourcemap: true
  },
  plugins
}];
