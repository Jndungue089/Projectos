/**
 * Imprime em tela o contéudo das variáveis
 * @param {string} desc Qual é a mensagem a ser impressa
 * @param {any} valor Contéudo das variáveis a ser imprsso
 */

var nome:string = "Otniel"
var idade:number= 8
var sexo: string= 'M'

function imprimir(desc:string, valor: any): void {
    console.log(desc, valor)
}
imprimir('\nO nome é: ', nome)
imprimir('\nPassa pela idade de: ', idade)
if (sexo == 'M') {
    imprimir('\nO seu sexo é: ', sexo)
} else {
    console.log('\nO seu sexo é: F')
}
