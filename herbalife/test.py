

# for i in range (2,5):
# 	print(i)


# test = [i for i in range(2,5+1)]
# print(test)

# If  is even and in the inclusive range of  2 to 5, print Not Weird
# If  is even and in the inclusive range of 6 to 20 , print Weird
# If  is even and greater than 20, print Not Weird


# n = 29

# test = [i for i in range(2,5+1)]
# genap = [x for x in range(6,20+1)]

# hasil_range = True if n in genap else False
# hasil_range2 = True if n in test else False


# if hasil_range == True  :
#     print ('Weird')
# elif n % 2 != 0 :  #ganjil dan dibawah 20 di print Aneh
#     print('Weird')
# elif n < 20 and hasil_range2 == False :
# 	print('Weird')
# else :
# 	print('Not Weird')


# a = 6564424525	
# b = 323252462

# modulus = a // b
# pembagi = a / b

# print(modulus)
# print(pembagi)

# 3,5,7
# banyak = [x for x in range(0,10)]
# ganjil = True if n % 2 == 0 else False
# for i in range (0,8):
# 	if i % 2 != 0 :
# 		print(i)


# for x in range(0,5+1):
# 	kuadrat = x ** 2
# 	print(kuadrat)


# True = tahun kabisat 
# False = bukan tahun kabisat

# def is_leap (year):

# 	if year % 4 == 0 :
# 		if year % 100 == 0  :
# 			if year % 400 == 0 :
# 				leap = True #pembagian 400
# 			else:
# 				leap = False #pembagian 400
# 		else:
# 			leap = True #pembagian 100
# 	else:
# 		leap = False  #pembagian 4

# 	return leap

# year = 2100
# print(is_leap(year))



# n = 8

# #jika di tulis 5, cetak angka sebelum 5

# for i in range(1,n+1):
# 	print(i, end='')



# n = 6
# for i in range (0,n):
# 	for x in range (0,i):
# 		print('*', end='')
# 	print('\n')

# def sum_number(nums):
# 	return sum(nums)

# def higer(f, *args):
# 	summ = f(*args)
# 	return summ

# result = higer(sum_number, [1,2,3])
# print(result)


# number = [i for i in range(0,12)]

# def is_even(angka):
# 	if angka % 2 == 0 :
# 		return True
# 	return False
# even_number = filter(is_even, number)
# print(list(even_number))

# def is_odds(nums):
# 	if nums % 2 != 0 :
# 		return True
# 	return False
# odds_number = filter(is_odds, number)
# print(list(odds_number))


# names = ['Asabeneh', 'Lidiya', 'Ermias', 'Abraham']
# def is_nama_panjang(huruf):
# 	if len(huruf) > 7 :
# 		return True
# 	return False

# nama_panjang = filter(is_nama_panjang, names)
# print(list(nama_panjang))


numbers = [1, 2, 3] # iterable
def square(x):
    return x ** 2
numbers_squared = map(square, numbers)
print(list(numbers_squared))






