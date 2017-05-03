<h2 class="heading">Billing</h2>
<section>
    <section>
        <form>
            <div class="form-group">
                <label>Billing address</label>
                <input type="radio" name="email" checked /> primary email address
                <br />
                <input type="radio" name="email" checked /> secondary email address
            </div>
        </form>
    </section>
    <section>
        <h3>Recent transactions</h3>
        <div class="table">
            <div class="table-head">
                <div class="table-data">ID</div>
                <div class="table-data">Amount</div>
                <div class="table-data">Date</div>
            </div>
            <?php for ($i = 0; $i < 15; $i++) { ?>
            <div class="table-row">
                <div class="table-data">AG382</div>
                <div class="table-data">$12.38</div>
                <div class="table-data">12/04/2017</div>
            </div>
            <?php } ?>
        </div>
    </section>
</section>
