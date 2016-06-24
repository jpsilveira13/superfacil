
<div class="BodyContainer">
	<div class="HelpInfo">
    Programa Clube de Fidelidade oferece pontos de recompensa destinados a manter os clientes a voltar e fazer novos negócios com você.<br />
    Todos os pontos de recompensas é equivalente a R$ 1, que será adicionado aos seus créditos na lojas. Onde eles poderão usar essa pontos / crédito para compras futuras.
    <br /><br />ex: 1 ponto a cada R$200 gasto nos pedidos
    <br /><br />Cálculos: 1 ponto = R$1 Real
    <br /><br />Todos os pontos de recompensa a fidelidade será adicionado ao seu crédito da loja que eles podem usar para pagar durante o checkout.<br />
  </div>
	<!--<fieldset>
   <legend>Personal Info:</legend>-->
    <div>
    <form action="index.php?ToDo=runAddon&addon=addon_loyaltyrewards&action=save" method="post">
    <label for="points" class="MediumFieldLabel">Ponto(s):</label>
    <input name="points" id="points" type="text" size="30" class="Field40" value="{{ Loyaltypoints|raw }}" />
    <label for="amount" class="MediumFieldLabel">a cada</label>
    R$ <input name="amount"  id="amount" type="text" size="30" class="Field100" value="{{ Loyaltyamount|raw }}" /> gasto nos pedidos.<br /><br />
    <input type="submit" class="btn" value="Enviar">    
    </form>
  <!--</fieldset>-->
	 </div>
</div>