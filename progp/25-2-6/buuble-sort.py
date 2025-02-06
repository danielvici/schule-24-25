arr_test = [4,5,9,1,3]

for i in range(len(arr_test)):
    if arr_test[i] > arr_test[i + 1]:
        temp = arr_test[i]
        arr_test[i] = arr_test[i + 1]
        arr_test[i + 1] = temp

print(arr_test)