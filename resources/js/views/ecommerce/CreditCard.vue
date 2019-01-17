<template>
  <div>
    <page-title-bar></page-title-bar>
    <v-container fluid pt-0>
      <v-card>
        <v-card-actions>
          <v-btn color="primary" @click="addNewCardDialog = true">
            {{$t('message.addNewCard')}}
          </v-btn>
        </v-card-actions>        
        <app-section-loader :status="loader"></app-section-loader>        
        <v-card-text>
          <v-data-table
            :headers="headers"
            :items="creditCard"
            hide-actions
            class="elevation-1"
          >
            <template slot="items" slot-scope="props">
              <td>{{ props.item.last4Digit }} </td>
              <td>{{ props.item.cardHolderName }}</td>
              <td>
                <v-btn icon class="mx-0" @click="deleteCard(props.item)" >
                  <v-icon color="grey lighten-1" >close</v-icon>
                </v-btn>
              </td>
            </template>
          </v-data-table>
          <delete-confirmation-dialog 
            ref="deleteConfirmationDialog" 
            heading="Are You Sure You Want To Delete?"
            message="Are you sure you want to delete this card permanently?"
            @onConfirm="onDeleteCard"
          >
          </delete-confirmation-dialog>
        </v-card-text>
      </v-card>
      <v-dialog v-model="addNewCardDialog" max-width="500">
        <v-card>
          <v-card-title>
            <span class="headline">{{$t('message.addNewCard')}}</span>
          </v-card-title>
          <v-card-text>
            <span class="d-flex">
              <v-text-field name="cardNumber" :mask="maskCardNumber" required placeholder="#### - #### - #### - ####" v-model="newCardDetails.last4Digit" label="Card Number"></v-text-field>
            </span>
            <span class="d-flex">
              <v-text-field name="cardHolderName" v-model="newCardDetails.cardHolderName" required label="Name"></v-text-field>
            </span>      
            <div class="d-flex">
              <v-flex xs12 sm12 md4 mr-4>
                <v-autocomplete
                  name="months"
                  :items="getMonths()"
                  label="Expiry Month"
                  required
                  v-model="newCardDetails.month"
                ></v-autocomplete>
              </v-flex>                    
              <v-flex xs12 sm12 md4 lg4 mr-4>
                <v-autocomplete
                  name="year"
                  :items="getYear()"
                  label="Expiry Year"
                  required
                  v-model="newCardDetails.year"
                  autocomplete
                ></v-autocomplete>                     
              </v-flex>
              <v-flex xs12 sm12 md4 ;g4>
                <v-text-field name="cvv" v-model="newCardDetails.cvv" :mask="maskCvv" required label="CVV"></v-text-field>
              </v-flex>
            </div>
          </v-card-text>
          <v-card-actions>
            <v-spacer></v-spacer>
            <v-btn color="primary" @click="addNewCardDialog = false">Cancel</v-btn>
            <v-btn color="error" :disabled="ifEmptyFields()" @click="addNewCard">Submit</v-btn>
          </v-card-actions>
        </v-card>
      </v-dialog>
    </v-container>
  </div>  
</template>
<script>
import { mapGetters } from "vuex";

export default {
  data() {
    return {
      loader: false,
      valid: true,
      newCardDetails: {
        cvv: "",
        month: "",
        year: "",
        last4Digit: "",
        cardHolderName: ""
      },
      maskCardNumber: "credit-card",
      maskYear: "####",
      maskCvv: "###",
      addNewCardDialog: false,
      selectDeletedCard: null,
      headers: [
        { text: "Number", sortable: false },
        { text: "Full Name", sortable: false },
        { text: "Remove Card", sortable: false }
      ]
    };
  },
  computed: {
    ...mapGetters(["creditCard"])
  },
  methods: {
    // open dialog to delete card
    deleteCard(card) {
      this.$refs.deleteConfirmationDialog.openDialog();
      this.selectDeletedCard = card;
    },
    // delete card
    onDeleteCard() {
      this.$refs.deleteConfirmationDialog.close();
      this.loader = true;
      setTimeout(() => {
        this.loader = false;
        this.$store.dispatch("onDeleteCard", this.selectDeletedCard);
      }, 1500);
    },
    // to display month in select list
    getMonths() {
      let months = [];
      for (let i = 1; i <= 12; i++) {
        if (i < 10) {
          i = "0" + i;
        }
        months.push(i);
      }
      return months;
    },
    // to display 10 years from current year
    getYear() {
      let years = [];
      let currentYear = new Date().getFullYear();
      for (let i = 0; i <= 9; i++) {
        let nextYear = currentYear + i;
        years.push(nextYear);
      }
      return years;
    },

    // to check fields are empty or not
    ifEmptyFields() {
      const {
        last4Digit,
        cardHolderName,
        month,
        year,
        cvv
      } = this.newCardDetails;
      if (
        last4Digit !== "" &&
        last4Digit.length == 16 &&
        cardHolderName !== "" &&
        month !== "" &&
        year !== "" &&
        cvv !== ""
      ) {
        return false;
      }
      return true;
    },
    // to add new card
    addNewCard() {
      this.addNewCardDialog = false;
      this.$store.dispatch("addNewCard", this.newCardDetails);
      this.newCardDetails = {
        cvv: "",
        month: "",
        year: "",
        last4Digit: "",
        cardHolderName: ""
      };
    }
  }
};
</script>