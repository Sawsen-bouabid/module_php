
<TR>
                        <TD>Name :</TD>
                        <TD> <label for="form-select"></label>
                            <select name="Name" >
                                <option value=<?php echo $product["Name"]?> ><?php echo $product["Name"]?></option>
                            </select>
                        </TD>
                    </TR>
                    <TR>
                        <TD>Model :</TD>
                        <TD>
                            <select name="Model">
                                <option value="<?php echo $product["Model"]?>" ><?php echo $product["Model"]?></option>
                            </select>
                        </TD>
                    </TR>
                    <TR>
                        <TD>Weight :</TD>
                        <TD>
                            <select name="weight">
                                <option value="<?php echo $product["weight"]?>"><?php echo $product["weight"]?></option>
                            </select>
                        </TD>
                    </TR>
                    <TR>
                        <TD>Price : (euro)</TD>
                        <TD>
                            <select name="price">
                                <option value="<?php formatPrice($product["price"]);?>"><?php formatPrice($product["price"]); ?></option>       </select>
                        </TD>
                    </TR>
                    <TR>
                        <TD>Discount : (%)</TD>
                        <TD>
                            <select name="Discount">
                                <option value="<?php echo $product["Discount"]?>" ><?php echo $product["Discount"]?></option>
                            </SELECT>
                        </TD>
                    </TR>
                    <TR>
                        <TD>Discounted Price : (euro)</TD>
                        <TD>
                            <SELECT name="priceDiscounted">
                                <option value="<?php formatPrice(displayDicountedPrice($product["price"],$product["Discount"] ));?>" ><?php formatPrice(displayDicountedPrice($product["price"],$product["Discount"] ))?></option>
                            </SELECT>
                        </TD>
                    </TR>
                    <TR>>