Resulting Data Structure 



App\Classes\DispatchPeriod {#536
  -periodStart: DateTime {#539
    +"date": "2024-06-07 09:00:00.000000"
    +"timezone_type": 3
    +"timezone": "UTC"
  }
  -periodClose: DateTime {#540
    +"date": "2024-06-07 17:00:00.000000"
    +"timezone_type": 3
    +"timezone": "UTC"
  }
  -consignments: SplObjectStorage {#538
    storage: array:2 [
      "000000001b7c178a000000000f08ace2" => array:2 [
        "object" => App\Classes\Consignment {#541
          -consignmentId: 1717767995
          -consignmentNumber: "CLCPCHIFERMLCS0I00CL0NHB0LNFF1UJ"
          -customer: App\Classes\Customer {#545
            -customerId: 996
            -address: "59 Hampton Grove Manchester M2 6BX"
          }
          -courier: App\Classes\Courier_465 {#546
            -id: 465
            -name: "Royal Mail Next Day"
          }
          -items: SplObjectStorage {#542
            storage: array:2 [
              "000000001b7c1788000000000f08ace2" => array:2 [
                "object" => App\Classes\OrderItem {#543
                  -itemCode: "9985654"
                  -description: "Fender Stratocaster"
                }
                "info" => null
              ]
              "000000001b7c17b7000000000f08ace2" => array:2 [
                "object" => App\Classes\OrderItem {#544
                  -itemCode: "11100897"
                  -description: "Korg Piano/Black Ebony"
                }
                "info" => null
              ]
            ]
          }
        }
        "info" => null
      ]
      "000000001b7c17b4000000000f08ace2" => array:2 [
        "object" => App\Classes\Consignment {#547
          -consignmentId: 1717767995
          -consignmentNumber: "NOJOKQ2XNRORW3ME"
          -customer: App\Classes\Customer {#552
            -customerId: 101
            -address: "17 Leigh Street London W1 6GJ"
          }
          -courier: App\Classes\Courier_203 {#553
            -id: 203
            -name: "Super Delivery UK"
          }
          -items: SplObjectStorage {#548
            storage: array:3 [
              "000000001b7c17b2000000000f08ace2" => array:2 [
                "object" => App\Classes\OrderItem {#549
                  -itemCode: "65017"
                  -description: "Electronic Drum Kit Package Deal"
                }
                "info" => null
              ]
              "000000001b7c17b1000000000f08ace2" => array:2 [
                "object" => App\Classes\OrderItem {#550
                  -itemCode: "32645"
                  -description: "Casio WK-7600 Portable Keyboard"
                }
                "info" => null
              ]
              "000000001b7c17b0000000000f08ace2" => array:2 [
                "object" => App\Classes\OrderItem {#551
                  -itemCode: "28757"
                  -description: "Nino by Meinl NINO-NS305 12 Inch Cymbal, Nickel Silverd"
                }
                "info" => null
              ]
            ]
          }
        }
        "info" => null
      ]
    ]
  }
}
