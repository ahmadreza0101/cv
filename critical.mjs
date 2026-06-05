import { generate } from 'critical';

try {
  await generate({
    base: '_site/',
    src: 'index.html',
    target: 'index.html',
    inline: true,
    extract: false,
    width: 1300,
    height: 900,
    
  });
  console.log('Critical CSS berhasil disuntikkan ke index.html!');
} catch (err) {
  console.error('Terjadi error:', err);
}